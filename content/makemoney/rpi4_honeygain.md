---
Title: Running Honeygain on a RPI4
Description: Why should you run Honeygain on a RPI4, and how? Let's talk about it.
Author: Benjamin Aerni
---

## Running Honeygain on a RPI4
Why should you run Honeygain on a RPI4, and how? Let's talk about it.
	

### The Math Behind it
So, why should you use a Raspberry PI 4 to run Honeygain?
***Electricity!*** If you have to pay for it, you likely already know where I'm going with this. Sure, you can leave a full PC or laptop running Honeygain 24/7, but it'll cost you extra in electricity.
So, how much does the PI4 cost to run? Well, at an absolute maximum it'll pull 15 Watts. Using an [cost calculator](https://www.rapidtables.com/calc/electric/electricity-calculator.html) we can see that means it'll cost a maximum of around a dollar a month to run the PI.

Okay, so what about an average computer?
Well, it entirely depends on the computer. Some could easily be pulling up to 200 watts at idle. (This is a worst case, but would cost me about $13 a month). On the low end you'd be looking at around 35 watts just sitting there and doing nothing. $2.30 a month.
Let's go in the middle here and say 75 watts at idle. That would be around $5 a month.


#### Cost Breakdown and Comparison
The earning numbers are based upon a low estimate, actual earnings with a dedicated machine could be much more, but is dependent on many factors.

Let's see for about 6 months of running them.

| RPI4 $      |  Earnings   | PC $         | Earnings   |
| ----------- | ----------- | ------------ | ---------  |
| $1          | $13.02      | $5           |    $13.02  |
| $1          | $13.02      | $5           |    $13.02  |
| $1          | $13.02      | $5           |    $13.02  |
| $1          | $13.02      | $5           |    $13.02  |
| $1          | $13.02      | $5           |    $13.02  |
| $1          | $13.02      | $5           |    $13.02  |
|** Totals **                                         |
| $6          | $78.12      | $30          |    $78.12  |

RPI 4 Profit:
$78.12 - $6 = **$72.12**


PC Profit:
$78.12 - $30 = **$48.12**

Double that for a full year, the RPI4 will have costed $12 and the PC around $60

##### So, how much does a Raspberry PI 4 cost?
To purchase one it'll run you around $35 for the 2GB model, you will also need an SD card, mini HDMI cable, and a USB-C power source. You will very likely already have some of these, but just to be safe let's assume you spend $60 total.

At a $60 purchase price, it'll take 1 year before the cost difference in electrical pays for the RPI 4, but in reality, the PI will use less than 15 watts, as that's the maximum the power supply can give under full load. Most of the time it'll be sitting there just sipping on power, costing you a cent or so a day. Having something dedicated for Honeygain can also yield higher gains with 24/7 CDN and no interruptions in your earnings.

***How do I set it up?***
If you're adventurous you can download [Wor Project](https://www.worproject.ml/) and a [windows 10 image](https://uupdump.ml/fetchupd.php?arch=arm64&ring=retail&build=19041.330) for your RPI4 and try to get it set up yourself. Outside of installing windows onto the PI, it's very straightforward and easy to perform. 
Otherwise, if you wait, I'll have a post up about it soon which you can follow along set-by-step.