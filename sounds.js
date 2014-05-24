function PlayRandomSound()
{
	var sounds = ["sound/exercise is very important.mp3",
				  "sound/i live for you.mp3",
				  "sound/i value friends.mp3",
				  "sound/i wanna say i love you.mp3",
				  "sound/its not about how you look on the outside.mp3"
				  ];
	var index  = Math.floor(Math.random()*sounds.length);
	console.log(index);
	var soundFile = new Audio(sounds[Math.floor(Math.random()*sounds.length)]);
	soundFile.play();	
}

