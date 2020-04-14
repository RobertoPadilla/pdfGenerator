<?php namespace App\Controllers;
const MONTHS = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
const WEEKDAYS = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
class Home extends BaseController
{
	protected $curDay;
	protected $curYear;
	protected $numOfCurMonth;
	protected $selectedDate;
	protected $numOfDays;

	public function __construct()
	{
		$this->curDay = date('j');
		$this->curYear = date('Y');
		$this->numOfCurMonth = date('n');
		$this->selectedDate = $this->curYear . '-' . $this->numOfCurMonth . '-1';
		$this->numOfDays = (int) date('t', strtotime($this->selectedDate));
	}
	public function index()
	{
		$pru = $this->getUserDate();
		$data["weekDays"] = WEEKDAYS;
		$data['currentDay']			= $pru[0];
		$data['currentMonth']		= MONTHS[$pru[1] - 1];
		$data['currentYear']		= $pru[2];
		$data['days'] 					= $pru[3];
		return view('homeView', $data);
	}

	/**
	 * Get current date or allow operations
	 * on the date
	 *
	 * @param bool $curDate
	 *
	 * @return array
	*/

	protected function getUserDate($curDate = true, $opNumber = 0){
		

		if(!$curDate && $opNumber != 0)
		{
			if($opNumber > 0)
			{
				$this->numOfCurMonth += $opNumber;
				if($this->numOfCurMonth > 12)
				{
					$this->curYear++;
					$this->numOfCurMonth = 1;
				}
			}
			elseif($opNumber < 0){
				$this->numOfCurMonth -= $opNumber;
				if($this->numOfCurMonth < 1)
				{
					$this->curYear--;
					$this->numOfCurMonth = 1;
				}
			}
		}

		$dateArray = array(
			$this->curDay,
			$this->numOfCurMonth,
			$this->curYear,
			$this->numOfDays
		);

		return $dateArray;
	}

	//--------------------------------------------------------------------

}
