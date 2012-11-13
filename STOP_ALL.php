<?php
shell_exec("sudo -u root -S drbl-ocs stop");
shell_exec("sudo -u root -S dcs -nl local");
shell_exec("sudo -u root -S dcs -nl clean-dhcpd-lease");
shell_exec("sudo rm /var/log/clonezilla/clonezilla-jobs.log");
?>