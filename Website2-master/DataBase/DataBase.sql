drop database MyShop;
create database MyShop;
use MyShop;


create table products(
    ProductID int auto_increment,
    ProductName varchar(50),
    ProductPrice varchar (50),
    ProductImage varchar(50),
Primary Key (ProductID)
);


create table users(
   UserID int auto_increment, 
   UserName varchar(50),
   UserPassword  varchar(50),
   Primary Key (UserID)
);

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani Tan-Go 155-zircons platform pumps', '1140$', 'Images/heels1.png');
INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani Tan-Go 155 patent-leather platform pumps', '1180$', 'Images/heels2.png');
INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani Nicla-effect platform pumps', '1405$', 'Images/heels3.png');
INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani Skyhigh Metallic Platform', '1575$', 'Images/heels4.png');
INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani Tan-Go-open pumps', '1100$', 'Images/heels5.png');
INSERT INTO `products` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`) VALUES(' ', 'Valentino Garavani ladylike shoes', '1440$', 'Images/heels6.png');


INSERT INTO `users` (`UserID`, `UserName`, `UserPassword`) VALUES(' ', 'jj', 2323);
