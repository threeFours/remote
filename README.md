# remote
Mobile Web-based TV/Receiver Remote

Built web-based version so roommates could also use the remote without having to install any app.

Runs on a Raspberry Pi with IR blasters to send signals to TV and receiver for power/volume/input controls.
Sends commands to Tivo cable box via telnet to change channels/open guide/navigate guide.

Bulls/Bears/Blackhawks/Cubs buttons run the getSchedule.py that looks up what channel the game is on for that team and sends the telnet command to the cable box. Uses a database updated periodically by cron, using information from Schedules Direct.
