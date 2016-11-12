<?php
	switch($_POST['button']){
		case "tvpower":
			exec("irsend SEND_ONCE tv KEY_POWER");
			break;
		case "refresh":
			exec("irsend SEND_ONCE tv KEY_MODE");
			exec("irsend SEND_ONCE tv KEY_DOWN");
			break;
        case ("bears"):
			exec("python /home/pi/getSchedule.py " . $_POST['button']);
			break;
        case ("bulls"):
			exec("python /home/pi/getSchedule.py " . $_POST['button']);
			break;
        case ("cubs"):
			exec("python /home/pi/getSchedule.py " . $_POST['button']);
			break;
        case ("blackhawks"):
			exec("python /home/pi/getSchedule.py " . $_POST['button']);
			break;
		case "mute":
			exec("irsend SEND_ONCE receiver KEY_MUTE");
			break;
		case "volumeup":
			exec("irsend SEND_ONCE receiver KEY_VOLUMEUP");
			break;
		case "volumedown":
			exec("irsend SEND_ONCE receiver KEY_VOLUMEDOWN");
			break;
		case "sourcecable":
			exec("irsend SEND_ONCE receiver KEY_1");
			break;
		case "sourcehtpc":
			exec("irsend SEND_ONCE receiver KEY_2");
			break;
		case is_numeric($_POST['button']):
			exec("/home/pi/channelChange.sh " . $_POST['button']);
			break;
		case ("GUIDE"||"LIVETV"||"UP"||"DOWN"||"LEFT"||"RIGHT"||"EXIT"||"SELECT"||"ENTER"):
			exec("/home/pi/tvControl.sh " . $_POST['button']);
			break;
	}
?>
