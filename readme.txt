
Step 1: Add this table in database

- Open database bca2018  typing localhost/phpmyadmin in browser
- go to sql tab
- box will open , paste below code and press Go button

or simply create table as done before 

CREATE TABLE `tbluser` (
  `id` int(4) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

INSERT INTO `tbluser` (`id`, `user_id`, `password`, `name`, `status`) VALUES
(1, 'admin', 'admin', 'Admin', 1);

ALTER TABLE `tbluser`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


Step 2: Run this folder in xampp/htdocs

step 3 : Test project in browser