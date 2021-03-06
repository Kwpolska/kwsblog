.. title: 5 months with a MacBook Pro: beautiful machine that just works
.. slug: 5-months-with-a-macbook-pro-beautiful-machine-that-just-works
.. date: 2016-12-27 16:15:00+01:00
.. tags: Apple, MacBook Pro, programming, review
.. category: Apple
.. description: I love my MacBook Pro.
.. type: text

Five months ago, I decided to make the switch from my trusty old desktop
computer, running Arch Linux, to a MacBook Pro. I picked the 2015 13" base
model with an upgraded hard drive. The device is beautiful, and just works™,
which is pretty important to me.

.. TEASER_END

Mac as a UNIX® machine: nothing beats a terminal
================================================

What are the first things you should set up on a Mac, as a programmer?
`Homebrew <http://brew.sh/>`_ (and Homebrew Cask). That’s a package manager
that can install all software necessary to create an useful command-line
environment, including Python, ffmpeg and sox for media needs, git, GCC (clang
is wonderful, but I need plain old GCC sometimes), zsh, and a handful of other
programs. And, of course, Vim.

And what Homebrew Cask can do for you? Install many GUI programs, without
needing to mess with ``.dmg`` installers or stuff.  Including web browsers, music
players, or iTerm2.

Did I mention UNIX®, with the registered trademark sign (belongs to The Open
Group; used for informational purposes only)? macOS has a fancy certificate to
prove it’s compliant with the relevant specifications. It runs the FreeBSD
userland, which is what you expect from a typical \*nix system. (Linux converts
might get slightly annoyed at behavioral differences, for example ``rm
directory -rf`` will work on Linux with GNU coreutils, but won’t on
macOS/FreeBSD)

The GUI: beautiful, fluid, friendly
===================================

macOS is famous for its user interface. The macOS GUI is well thought out, even
though there are some idiosyncrasies a long-time Linux/Windows user might
consider weird. For example, sorting folders before files is something natural
for Windows, but on macOS, it’s a brand new option — added in macOS Sierra,
which came out in September 2016.

That aside, the macOS user interface makes one coherent product. You can expect
consistent behavior between apps, and that often extends to third-party
software. Apple has a document, called `Human Interface Guidelines`__, which
describes how a macOS app should behave. While there are some documents like
this one for Windows, you can see many apps ignoring what it says — including
eg. built-in software, which cannot even decide on which font to use (bitmap MS
Sans Serif vs vectorized Microsoft Sans Serif vs Segoe UI — what is going on?!)

While the interface is friendly and coherent, it can get a little worse
when *foreign* apps are involved — for example, Qt or wxWidgets apps can
sometimes differ in behavior, but that’s not noticeable. X11 apps are another
story, but most of their developers are not aware that someone is running them
on macOS. (Excluding the Inkscape developers, which have a Mac “app” that
basically runs it in X11 and they do not even care…)

__ https://developer.apple.com/library/content/documentation/UserExperience/Conceptual/OSXHIGuidelines/index.html

Programming: old habits die hard
================================

Did I mention Vim? Well, I’m still using Vim and a terminal emulator to get a
lot of coding work done. Why? Because they are still the best ways to be
productive. I tried many *gooey* solutions for coding, from the heavyweights
(PyCharm, Visual Studio) to the laughable Atom editor (famous for being slow,
and effectively a web browser) — and none of them was able to replace Vim and a
Terminal. They are far too addictive.

That said, I sometimes use GitHub for Desktop, or other helper tools.
Sometimes, they work well — key word here is *sometimes*. Unlike Vim (or
NeoVim, or a GUI: MacVim/VimR), which boosts my productivity by a lot.

Honorable mention goes to Automator and AppleScript. They are a superb
solution for automating common tasks in the GUI, something other OSes do not
provide. With Automator, everyone can create a workflow to perform repetitive
tasks faster. With AppleScript, you can get even more stuff done.

The trackpad: addictive
=======================

Apple is famous for their trackpads. Their newest generation of these devices
does not really move when you click it, it uses the Taptic Engine and [insert
smart-sounding words here] to *simulate* a click. It also supports Force Touch,
for pressing down harder on something (eg. a word to reveal dictionary
definitions), and haptic feedback for certain operations *(in Soviet Russia,
trackpad clicks you!)*

Those trackpads also provide intuitive gestures. Working with
full-screen windows or multiple desktops? Just swipe left/right to switch
between them. Need to see all your windows? Swipe up with three fingers. Smooth
zoom, scrolling and rotating can also be done with just the trackpad.

And recently I had to do some stuff on someone else’s Windows notebook. That
notebook features a touchpad that does not *click* — it has two buttons on the
bottom, and tap to click is enabled. I had to drag and drop some files between
two windows. I tried doing it the way I got used on the MBP trackpad, which is
basically the way you’d do it with a mouse: hover cursor above file, click the
trackpad, move mouse to other windows, and release. That doesn’t work on those
non-clicky touchpads. A software developer failing at drag-and-drop must be a
funny thing to see. That’s just how addictive the trackpad is. (Of course,
Windows notebooks with clicky trackpads exist, but are not as popular as the
tappy ones.)

Walled garden: how can you NOT love our products?
=================================================

Of course, there are some issues with living in an Apple walled garden. The
main issue is: if you want to use something that is not an Apple product, good
luck with that. Sure, you can use an Android phone, but you won’t get
some of the nice Handoff features, and if you want to transfer files, have fun
using a forgotten barely-working app from 2012. That phone also won’t be able
to access your iCloud stuff, so put your data somewhere else.

Do you want to use an external hard drive, or a USB stick? With other operating
systems? Well, you might have an issue with the file system. You can choose
between ExFAT, which is not popular but kinda does the job; FAT32, which has a
4GB file size limit (virtual disk images are often larger than that), or NTFS,
but for that you will need to pay a third-party company — and trust them not to
do anything nefarious. Or use experimental built-in support, or an open-source
project, both of which aren’t something one would normally trust with important
data.

Speaking of external hard drives, here’s a hint: if you want to use a drive for
Time Machine (a wonderful, foolproof, one-click backup solution), and you want
it encrypted, make sure it uses GPT and not MBR. I had to reformat my drive
twice, and that’s not well documented (you need to click the help button,
then go through 3 pages to find a mention of this).

Do you want to play some games? Well, there is basically no support for
gamepads, only some community beta drivers for the official PS3/Xbox 360 pads.
Apple does not care.

And then we get to mouse issues. You see, even though the trackpad is awesome,
I also want to use a regular mouse. So I started with my old PC mouse, as a
temporary solution. The mouse was a Logitech M560, which uses the wireless
Unifying USB connector. It turns out the middle mouse button is supposed to be
a Windows button on one click and left mouse button on another, but Linux
drivers seem to change that behavior. To fix that, I’d need drivers for macOS.
Logitech believes this mouse is not worthy of a Mac, and so the mouse is not
detected by their driver suite. I got rid of that mouse and replaced it with a
Microsoft Sculpt Comfort Mouse. The mouse has a real middle button, which is
activated by clicking the scroll wheel, and a Windows button on the side
(generally useless on macOS).

Sadly, macOS insists on scrolling in a weird accelerated way, where the number
of pixels scrolled grows over time — which means scrolling by one step means
scrolling by 5 pixels, but the longer you scroll, the larger the scroll
becomes.

The future: I’m worried
=======================

I made the decision to buy the MacBook Pro in the middle of rumor season, after
WWDC which left a lot of people disappointed. I decided that, if all the rumors
about removed ports and touchy-feely screens were true, I would not want that
device on my desk.

**And boy did Apple deliver!** The new MacBook Pro has only USB-C ports (and a
headphone jack!), a gimmicky Touch Bar that only helps with emoji (the rest can
be done with standard keyboard shortcuts, or on-screen toolbars — I thought
that was a Pro machine, not a toy?), and a fingerprint reader (which I don’t
care about). And then there’s the cheaper model, with two USB-C ports and no
touch interfaces. My MBP, mainly a desktop replacement, is on AC power all the
time, and runs an external HDMI display. With the cheaper model (worse CPU than
2015; same price as 2015 with the same 256GB drive), I would have zero ports
for any other external devices. And I often have some thing plugged in, in
which case the only unoccupied ports are the Thunderbolt ports (which I don’t
have any devices for).

So, I hope this 2015 model will live on for years, and hopefully when it fails,
Apple will have a more sensible machine out there. For now, I’ll keep my
*MacBook Pro (Retina, 13-inch, Early 2015)* and will be pretty happy with it.

With just only one exception: two kernel panics in nearly 5 months. A bit
unstable, eh?
