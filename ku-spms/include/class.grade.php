<?php

/**
 * The class provides methods for the realization of messages and replies.
 *
 * @author Open Dynamics <info@o-dyn.de>
 * @name message
 * @version 0.4.6
 * @package Collabtive
 * @link http://www.o-dyn.de
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v3 or later
 */

class grade
{
    public $mylog;

    /**
     * Konstruktor
     * Initialisiert den Eventlog
     */
    function __construct()
    {
        $this->mylog = new mylog;
    }

    

    /**
     * Edits a grades
     *
     * @param int $id Eindeutige Nummer der Nachricht
     * @param string $title Titel der Nachricht
     * @param string $text Text der Nachricht
     * @param string $tags Tags for the grade
     * @return bool
     */
    
	 function edit($id, $grade, $userid, $now)
    {
        $id = mysql_real_escape_string($id);
        $grade = mysql_real_escape_string($grade);
        $now = mysql_real_escape_string($now);
        $id = (int) $id;
		$userid=(int)$userid;

        $upd = mysql_query("UPDATE projekte SET `grade`='$grade',`svid`='$userid',`gradedon`='$now' WHERE ID = $id");

        if ($upd) {
            $this->mylog->add($grade, 'projekt' , 8, $id);
            return true;
        } else {
            return false;
        }
    }

    
	 function getMysupervisor($user, $status = 1)
    {
        $user = mysql_real_escape_string($user);
        $status = mysql_real_escape_string($status);
        $user = (int) $user;
        $status = (int) $status;

        $myprojekte = array();
        $sel = mysql_query("SELECT projekt FROM projekte_assigned WHERE user = $user ORDER BY ID ASC");

        while ($projs = mysql_fetch_row($sel)) {
            $projekt = mysql_fetch_array(mysql_query("SELECT ID FROM projekte WHERE ID = $projs[0] AND status=$status"), MYSQL_ASSOC);
            if ($projekt) {
                $project = $this->getProject($projekt["ID"]);
                array_push($myprojekte, $project);
            }
        }

        if (!empty($myprojekte)) {
			// Sort projects by due date ascending
			$date = array();
			foreach ($myprojekte as $key => $row) {
				$date[$key] = $row['end'];
			}
			array_multisort($date, SORT_ASC, $myprojekte);
			
            return $myprojekte;
        } else {
            return false;
        }
    }

}
?>