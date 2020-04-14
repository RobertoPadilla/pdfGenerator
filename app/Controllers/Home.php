<?php namespace App\Controllers;
const MONTHS = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
const WEEKDAYS = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
class Home extends BaseController
{
	public function index()
	{
		$data["weekDays"] = WEEKDAYS;
		$numberOfCurrentMonth		= date("n");
		$data['currentDay']			= date("j");
		$data['currentYear']		= date("Y");
		$data['currentMonth']		= MONTHS[$numberOfCurrentMonth - 1];
		$selectedYear 					= $data['currentYear'];
		$selectedMonth 					= $numberOfCurrentMonth;
		$selectedDate 					= $selectedYear . '-' . $numberOfCurrentMonth . '-1';
		$data['days'] 					= (int) date('t', strtotime($selectedDate));
		return view('homeView', $data);
	}

	//--------------------------------------------------------------------

}
