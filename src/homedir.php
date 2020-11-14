<?php

if(!function_exists('get_home_directory')) {

	/**
	 * Determines current user's home directory
	 * @return string
	 */
	function get_home_directory() {
		$homeDir = $_SERVER['HOME'] ?? '';

		if(empty($homeDir)) {
			$homeDir = getenv('HOME');
		}

		if(empty($homeDir) && is_windows()) {
			$homeDrive = $_SERVER['HOMEDRIVE'] ?? '';
			$homeDirWin = $_SERVER['HOMEDIR'] ?? '';

			$homeDir = $homeDrive . $homeDirWin;
		}

		if(empty($homeDir) && function_exists('exec')) {
			if(is_windows()) {
				$homeDir = exec('echo %userprofile%');
			} else {
				$homeDir = exec('echo ~');
			}
		}

		return $homeDir;
	}

	/**
	 * Checks whether current operating system is a Windows
	 * @return boolean
	 */
	function is_windows() {
		return strncasecmp(PHP_OS, "WIN", 3) === 0;
	}
}