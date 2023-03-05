var videoDiv = document.querySelector(".VideoDiv")
var video = document.querySelector(".videoPlayer")
var videoControls = document.querySelector(".VideoControls")
var playButton = document.querySelector(".playPause")
var playColour = document.querySelector(".PlayColour")
var progressBar = document.querySelector(".PlayBar")
var volumeController = document.querySelector(".volume")
var volumeProgress = document.querySelector(".volumeInputSlider")
var volumeIcon = document.querySelector(".volumeMuteUnmute")
var currentTimeElement = document.querySelector(".currentTime")
var totalTimeElement = document.querySelector(".totalTime")
var leftSeeker = document.querySelector(".SeekLeft")
var rightSeeker = document.querySelector(".SeekRight")
var FullscreenButton = document.querySelector(".FullscreenButton")


const videoWorks = !!document.createElement('video').canPlayType;
if (videoWorks) {
    video.controls = false;
    videoControls.classList.remove('hidden');
}

playButton.addEventListener("click", togglePlay)
//functions
function togglePlay() {
    if (video.paused || video.ended) {
        video.play()
        playButton.classList.remove("play")
        playButton.classList.add("pause")
    } else {
        video.pause()
        playButton.classList.remove("pause")
        playButton.classList.add("play")
    }
}

video.addEventListener("click", function () {
    if (video.paused || video.ended) {
        video.play()
        console.log(playButton)
        console.log(playButton.classList)
        playButton.classList.remove("play")
        playButton.classList.add("pause")
    } else {
        video.pause()
        playButton.classList.remove("pause")
        playButton.classList.add("play")
    }
})


if (document.activeElement = video) {
    document.addEventListener('keyup', event => {
        if (event.code === 'Space') {
            if (video.paused || video.ended) {
                video.play()
                console.log(playButton)
                console.log(playButton.classList)
                playButton.classList.remove("play")
                playButton.classList.add("pause")
            } else {
                video.pause()
                playButton.classList.remove("pause")
                playButton.classList.add("play")
            }
        } else if (event.key === "ArrowLeft") {
            video.currentTime = video.currentTime - 5
        } else if (event.key === "ArrowRight") {
            video.currentTime = video.currentTime + 5
        } else if (event.key === "f" || event.key === "F") {
            if (FullscreenButton.classList.contains("minimisedVideo")) {
                videoDiv.requestFullscreen()
                FullscreenButton.classList.remove("minimisedVideo")
                FullscreenButton.classList.add("fullscreenVideo")
            } else {
                document.exitFullscreen()
                FullscreenButton.classList.remove("fullscreenVideo")
                FullscreenButton.classList.add("minimisedVideo")
            }
        } else if (event.key === "m" || event.key === "M") {
            var volumeValue = volumeController.value
            if (volumeValue == 0) {
                volumeController.value = 1
                video.volume = 1
                volumeProgress.style.width = "100%"
                volumeIcon.classList.remove("volumeLow", "volumeMuted")
                volumeIcon.classList.add("volumeHigh")
            } else {
                volumeController.value = 0
                video.volume = 0
                volumeProgress.style.width = "0%"
                volumeIcon.classList.remove("volumeHigh", "volumeLow")
                volumeIcon.classList.add("volumeMuted")
            }
        }
    })
}


video.addEventListener("timeupdate", function () {
    var timepos = video.currentTime / video.duration
    playColour.style.width = timepos * 100 + "%"
    if (video.ended) {
        playButton.classList.remove("pause")
        playButton.classList.add("play")
    }
    let currentMinutes = Math.floor(video.currentTime / 60)
    let currentSeconds = Math.floor(video.currentTime - currentMinutes * 60)
    let totalMinutes = Math.floor(video.duration / 60)
    let totalSeconds = Math.floor(video.duration - totalMinutes * 60)
    currentTimeElement.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`
    totalTimeElement.innerHTML = `${totalMinutes}:${totalSeconds < 10 ? '0' + totalSeconds : totalSeconds}`
})

videoDiv.addEventListener("mouseover", function () {
    videoDiv.classList.add("hovering")
})

videoDiv.addEventListener("mouseout", function () {
    videoDiv.classList.remove("hovering")
})

var timeout = function () {
    videoDiv.classList.remove("hovering")
}
var mouseStillTimer = setTimeout(timeout, 2000)

video.onmousemove = function () {
    clearTimeout(mouseStillTimer)
    videoDiv.classList.add("hovering")
    mouseStillTimer = setTimeout(timeout, 2000)
}

FullscreenButton.addEventListener("click", function () {
    if (FullscreenButton.classList.contains("minimisedVideo")) {
        videoDiv.requestFullscreen()
        FullscreenButton.classList.remove("minimisedVideo")
        FullscreenButton.classList.add("fullscreenVideo")
    } else {
        document.exitFullscreen()
        FullscreenButton.classList.remove("fullscreenVideo")
        FullscreenButton.classList.add("minimisedVideo")
    }
})

var isProgressMouseDown = false
progressBar.onmousedown = function () { isProgressMouseDown = true };
document.onmouseup = function () { isProgressMouseDown = false };
progressBar.onmousemove = (e) => {
    if (isProgressMouseDown) {
        const progressTime = (e.offsetX / progressBar.offsetWidth) * video.duration
        video.currentTime = progressTime
    }
};
//change progress on click
progressBar.addEventListener("click", (e) => {
    const progressTime = (e.offsetX / progressBar.offsetWidth) * video.duration
    video.currentTime = progressTime
})

volumeController.addEventListener("input", function () {
    var volumeValue = volumeController.value
    volumeProgress.style.width = (volumeValue * 100) + "%"
    video.volume = volumeValue
    if (volumeValue == 0) {
        volumeIcon.classList.remove("volumeHigh", "volumeLow")
        volumeIcon.classList.add("volumeMuted")
    } else if (volumeValue < 0.5) {
        volumeIcon.classList.remove("volumeHigh", "volumeMuted")
        volumeIcon.classList.add("volumeLow")
    } else {
        volumeIcon.classList.remove("volumeLow", "volumeMuted")
        volumeIcon.classList.add("volumeHigh")
    }
})

volumeIcon.addEventListener("click", function () {
    var volumeValue = volumeController.value
    if (volumeValue == 0) {
        volumeController.value = 1
        video.volume = 1
        volumeProgress.style.width = "100%"
        volumeIcon.classList.remove("volumeLow", "volumeMuted")
        volumeIcon.classList.add("volumeHigh")
    } else {
        volumeController.value = 0
        video.volume = 0
        volumeProgress.style.width = "0%"
        volumeIcon.classList.remove("volumeHigh", "volumeLow")
        volumeIcon.classList.add("volumeMuted")
    }
})

leftSeeker.addEventListener("click", function () {
    video.currentTime = video.currentTime - 5
})

rightSeeker.addEventListener("click", function () {
    video.currentTime = video.currentTime + 5
})

function isPlayerInViewport(player) {
    const rect = player.getBoundingClientRect()
    return (rect.bottom >= 65 && rect.left >=0)
}

document.addEventListener("scroll", function() {
    const Message = isPlayerInViewport(video)
    if (Message == false) {
        try {
            video.requestPictureInPicture()
        } catch (error) {
            console.log(error)
        }
    } else {
        if(document.pictureInPictureElement) {
            document.exitPictureInPicture()
        }
    }
})