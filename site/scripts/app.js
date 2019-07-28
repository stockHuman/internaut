/**
 * Michael Hemingway
 * (c) 2019
 */

import Navigation from './components/nav'
import Logger from './components/logger'

import { allImages } from './components/upres'

const nav = new Navigation()
nav.mount(() => nav.colors())

// Footer settings
const tgl_darkmode = document.getElementById('tgl-dark-mode')
const tgl_fullcolor = document.getElementById('tgl-full-color')

let theme = localStorage.getItem('theme')
let fullcolor = localStorage.getItem('fullcolor')

if (!theme) localStorage.setItem('theme', 'light')
if (!fullcolor) localStorage.setItem('fullcolor', false)

tgl_darkmode.checked = theme === 'light' ? false : true
tgl_fullcolor.checked = fullcolor === 'true' ? true : false


const toggleColor = () => {
	if (tgl_fullcolor.checked) {
		localStorage.setItem('fullcolor', true)
	} else {
		localStorage.setItem('fullcolor', false)
	}
}

const toggleDarkTheme = () => {
	if (tgl_darkmode.checked) {
		localStorage.setItem('theme', 'dark')
		document.body.classList.add('dark-theme')
	} else {
		localStorage.setItem('theme', 'light')
		document.body.classList.remove('dark-theme')
	}
}

tgl_darkmode.addEventListener('change', toggleDarkTheme)
tgl_fullcolor.addEventListener('change', toggleColor)

// Class for mouse movement, hides thick border used for tabbing
let mm = () => {
	document.body.classList.add('mn')
	document.removeEventListener('mousemove', mm)
}
document.addEventListener('mousemove', mm)

// initialises logger
const logroot = document.querySelector('.stats')
if (logroot) {
	new Logger(logroot)
}

const pictures = allImages(document)
const undither = image => {
	if (image.src.includes('dither-')) {
		let undithered = image.src.replace('dither-', '').replace('.png', '')
		if (image.type === 'bg') {
			image.node.style.backgroundImage = `url(${undithered})`
			image.node.style.mixBlendMode = 'initial'
		} else {
			image.node.src = undithered
		}
	}
}

if (fullcolor == 'true') {
	pictures.forEach(image => undither(image))
} else {
	// onclick, change out low-res image for hi-res
	pictures.forEach(image => {
		image.node.addEventListener('click', () => {
			undither(image)
		})
	})
}

if (theme == 'dark') {
	document.body.classList.add('dark-theme')
} else {
	document.body.classList.remove('dark-theme')
}
