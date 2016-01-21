
ALTER TABLE `home_players`
  ADD comment varchar(255) not null after number;
  
ALTER TABLE `home_players`
  ADD player_photo varchar(64) not null after comment;
  
ALTER TABLE `positions`
  ADD text varchar(255) not null after position_name;