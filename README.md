Leave Your Worries Behind
====


## Overview
The system exist out of an apache server with a database and a website for mobile phones. On this website people can upload content which will be send to the database. People can see own content on your phone. In addition to, content randomly appear from database on public screen from among the latest 10 contents. Appeared content is folded and becomes paper airplane. Paper airplane is going to fly away. And people can look others contents.

## Goal
Our purposel for this design challenge is to entertain the leisure traveller in the waiting area by making the waiting time into a positive experience.

## How to set up
1.Prepare Database and Apache Server
2.Create table in the database    
3.Upload these files to your apache server  

## Database Script
create table board( id int not null auto_increment primary key, name varchar(20), comment text);

## How to use
User  
1.Prepare your smartphone  
2.Open a browser (Recommend Google Chrome)  
3.http://37.97.136.49/timeflies/leave.html  
4.Write your name and  your worry  
5.Enter “MAKE IT FLY AWAY”  
6.Watch fly_away animation  
7.Wait 4 seconds  
8.Get voucher (virtual voucher in the case of our prototype)  
9.Done  

Server  
1.Prepare the screen  
2.Put the screen in the waiting line  
3.Open http://37.97.136.49/timeflies/php/screen.php   

## Reference
When I made fly_away animation, I used this as reference.  
http://codepen.io/cihadturhan/pen/KIJdD

## LICENCE
Produced by Team Time Flies
