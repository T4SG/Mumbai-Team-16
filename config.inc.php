<?php
error_reporting(0);
session_start();
class connection
{
	 var $mDbName;
    var $mDbHost;
    var $mDbUser;
    var $mDbPassword;
    var $mConnection;
    function localarea()
	{
		   
            $this->mDbName        = "Team16" ; //"portal";
            $this->mDbHost        = "localhost" ; //"m6";
            $this->mDbUser        = "root" ; //"root";
            $this->mDbPassword  = "code4good" ; //"";
            $this->mConnection = @mysql_connect($this->mDbHost, $this->mDbUser, $this->mDbPassword);
            if(!$this->mConnection)
			{
                die("Connection Failed");
        	}
			echo "connection estd";
		
	}

	 function ExecuteQuery($fQuery)
    {
		$mResult = mysql_db_query($this->mDbName, $fQuery, $this->mConnection);
        return $mResult;
    }
	
    function NumRows($fResult)
    {
	    $mRows = mysql_num_rows($fResult);
        return $mRows;
    }
    function FetchArray($fResult)
    {
        $mRow = mysql_fetch_array($fResult);
        return $mRow;
    }
	function FetchObject($fResult)
    {
        $mRow = mysql_fetch_object($fResult);
        return $mRow;
    }
    function FetchRow($fResult)
    {
        $mRow = @mysql_fetch_row($fResult);
        return $mRow;
    }
	function NewDate($OldDate)
	{
		$NewArr = explode("-",$OldDate);
		$NewDateArr = date("M j, Y",mktime(0,0,0,$NewArr[1],$NewArr[2],$NewArr[0]));
		return $NewDateArr;
	}
	function DateTime($OldDateTime)
	{
		$NewArr = explode("-",$OldDateTime);
		$NewDateArr = date("F j, Y, g:i a",mktime(0,0,0,$NewArr[1],$NewArr[2],$NewArr[0]));
		return $NewDateArr;
		
	}
	function Title()
	{
		$message = "Control Panel";
		return $message;
	}
	function Front_Title()
	{
		$message = "VibrantGroup";
		return $message;
	}
	function AdminSitePath()
	{
		$Path = "";
		return $Path;
	}
	function StringBreak($Text,$limit)
	{
		$New = substr($Text,0,$limit);
		return $New;
	}

}
?>