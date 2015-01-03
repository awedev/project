<?php

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Attachment extends Eloquent Implements StaplerableInterface{
    // We'll need to use the Stapler Eloquent trait in our model (see setup for more info).
    use EloquentTrait;

    /**
     * We can add our attachments to the fillable array so that they're 
     * mass assignable on the model.
     *
     * @var array
     */
    protected $fillable = ['photo', 'avatar'];

    /**
     * Inside our model's constructor, we'll define some stapler attachments:
     *
     * @param attributes
     */
    public function __construct(array $attributes = array()) 
    {
        // Define an attachment named 'avatar', with both thumbnail (100x100) and large (300x300) styles, 
        // using custom url and default_url configurations:
        $this->hasAttachedFile('avatar', [
            'styles' => [
            	'micro' =>'50*50#',
                'thumbnail' => '100x100#',
                'large' => '300x300#'
            ],
            'url' => '/system/:attachment/:id_partition/:style/:filename',
            'default_url' => '/:attachment/:style/missing.jpg'
        ]);

        // Define an attachment named 'bar', with both thumbnail (100x100) and large (300x300) styles, 
        // using custom url and default_url configurations, with the keep_old_files flag set to true 
        // (so that older file uploads aren't deleted from the file system) and image cropping turned on:
        // $this->hasAttachedFile('bar', [
        //     'styles' => [
        //         'thumbnail' => '100x100#',
        //         'large' => '300x300#'
        //     ],
        //     'url' => '/system/:attachment/:id_partition/:style/:filename',
        //     'keep_old_files' => true
        // ]);

        // Define an attachment named 'photo' that has a watermarked style.  Here, we define a style named 'watermarked'
        // that's a closure (so that we can do some complex watermarking stuff):
        $this->hasAttachedFile('photo', [
            'styles' => [
                'micro'     => '50X50#',
                'thumbnail' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'large'     => '300x300#',
                'watermarked' => function($file, $imagine) {
                    $watermark = $imagine->open('/path/to/images/watermark.png');   // Create an instance of ImageInterface for the watermark image.
                    $image     = $imagine->open($file->getRealPath());              // Create an instance of ImageInterface for the uploaded image.
                    $size      = $image->getSize();                                 // Get the size of the uploaded image.
                    $watermarkSize = $watermark->getSize();                         // Get the size of the watermark image.

                    // Calculate the placement of the watermark (we're aiming for the bottom right corner here).
                    $bottomRight = new Imagine\Image\Point($size->getWidth() - $watermarkSize->getWidth(), $size->getHeight() - $watermarkSize->getHeight());

                    // Paste the watermark onto the image.
                    $image->paste($watermark, $bottomRight);

                    // Return the Imagine\Image\ImageInterface instance.
                    return $image;
                }
            ],
            'url' => '/system/:attachment/:id_partition/:style/:filename'
        ]);

        // Define an attachment named 'qux'.  In this attachment, we'll use alternative style notation to define a slightly more
        // complex thumbnail style.  In this example, the thumbnail style will be a 100x100px auto-oriented image with 100% quality: 
        // $this->hasAttachedFile('qux', [
        //     'styles' => [
        //         'thumbnail' => ['dimensions' => '100x100', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
        //         'micro'     => '50X50'
        //     ],
        //     'url' => '/system/:attachment/:id_partition/:style/:filename',
        //     'default_url' => '/defaults/:style/missing.png'
        // ]);

        // Define an attachment named 'quux' that stores images remotely in an S3 bucket.
        // $this->hasAttachedFile('quux', [
        //     'styles' => [
        //         'thumbnail' => '100x100#',
        //         'large' => '300x300#'
        //     ],
        //     'storage' => 's3',
        //     's3_client_config' => [
        //         'key' => 'yourPublicKey',
        //         'secret' => 'yourSecreteKey',
        //         'region' => 'yourBucketRegion'
        //     ],
        //     's3_object_config' => [
        //         'bucket' => 'your.s3.bucket'
        //     ],
        //     'default_url' => '/defaults/:style/missing.png',
        //     'keep_old_files' => true
        // ]);

        // IMPORTANT:  the call to the parent constructor method
        // should always come after we define our attachments.
        parent::__construct($attributes);
    }

}