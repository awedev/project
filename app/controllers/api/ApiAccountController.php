<?php

class ApiAccountController extends BaseController {
	protected $apiAccount = null;

	public function __construct(ApiAccount $apiAccount){
		parent::__construct();
		$this->apiAccount = $apiAccount;
	}
	/**
	 * Display a listing of the resource.
	 * GET /api/apiaccount
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('site/api/apiaccount/index')->with('apiAccounts', ApiAccount::where('uid', '=', Auth::id())->orderBy('created_at', 'desc')->get());
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /api/apiaccount/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('site/api/apiaccount/create');
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /api/apiaccount
	 *
	 * @return Response
	 */
	public function store()
	{
		$message = '';
		$uid = Auth::id();
		$apiKey = Hash::make(Input::get('project_name') + Input::get('email'));
		$this->apiAccount->uid = $uid;
		$this->apiAccount->api_key = $apiKey;
		if($this->apiAccount->save()){
			$message = Helper::createMessage('info', Lang::get('message.save_success'));
		}else{
			$message = Helper::createMessage('warning', Lang::get('message.save_fail'));
		} 
		Session::flash('message', $message);
		return Redirect::to('api/apiaccount');
	}
	// /**
	//  * Display the specified resource.
	//  * GET /api/apiaccount/{id}
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function show($id)
	// {
	// 	return View::make('site/api/apiaccount');
	// }

	// /**
	//  * Show the form for editing the specified resource.
	//  * GET /api/apiaccount/{id}/edit
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function edit($id)
	// {
	// 	return View::make('site/api/apiaccount/create');
	// }

	// /**
	//  * Update the specified resource in storage.
	//  * PUT /api/apiaccount/{id}
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function update($id)
	// {
	// 	return View::make('site/api/apiaccount/create');
	// }
	/**
	 * Remove the specified resource from storage.
	 * DELETE /api/apiaccount/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(isset($id->id)){
			$this->apiAccount = ApiAccount::find($id->id);
			if($this->apiAccount->delete()){
				$message = Helper::createMessage('info', Lang::get('message.delete_success'));
			}else{
				$message = Helper::createMessage('info', Lang::get('message.delete_fail'));
			}
			Session::flash('message', $message);
			return Redirect::to('api/apiaccount');
		}
	}
}