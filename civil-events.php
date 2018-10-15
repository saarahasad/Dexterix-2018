<!DOCTYPE html>
<html lang="en" >
   <head>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap"></script>          
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Civil Engineering Events</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <style>
         body {
         background-image: url(images/stars-about.png);   
         color: #333;
         font-family: 'Raleway', sans-serif;
         font-weight: 400;
         line-height: 1.5;
         margin: 0 auto;
         max-width: 80em;
         background-color: transparent;
         overflow-y: scroll;
         }
         .expanding-grid {
         position: relative;
         width: 100%;
         background-color: transparent;
         padding: 2rem;
         }
         .expanding-grid .links {
         display: block;
         margin: 0 -1em;
         overflow: hidden;
         padding: 1em 0;
         background-color: transparent;
         }
         .expanding-grid .links > li {
         box-sizing: border-box;
         float: left;
         padding: 1em;
         background-color: transparent;
         }
         .expanding-grid .links > li a {
         background-image: url(images/ece/ec-ramrom.jpeg);   
         color: #fff;
         display: block;
         font-size: 2em;
         line-height: 1;
         padding: 25% 1em;
         position: relative;
         background-color: transparent;
         text-align: center;
         text-decoration: none;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         }
         .expanding-grid .links > li a:hover {
         #ffb733
         }
         .expanding-grid .links > li a.active {
         #ffb733
         }
         .expanding-grid .links > li a.active:after {
         background-color: transparent;
         border-bottom: 0.375em solid #888;
         border-left: 0.375em solid transparent;
         border-right: 0.375em solid transparent;
         bottom: -0.5em;
         content: '';
         height: 0;
         left:50%;
         margin-left: -0.375em;
         position: absolute;
         width: 0;
         }
         @media only screen and (max-width: 39.99em) {
         .expanding-grid .links > li {
         width: 50%;
         }
         .expanding-grid .links > li:nth-of-type(2n+1) {
         clear: left;
         }
         }
         @media only screen and (min-width: 40em) and (max-width: 59.99em) {
         .expanding-grid .links > li {
         width: 33.3333333333%;
         }
         .expanding-grid .links > li:nth-of-type(3n+1) {
         clear: left;
         }
         }
         @media only screen and (min-width: 60em) {
         .expanding-grid .links > li {
         width: 25%;
         }
         .expanding-grid .links > li:nth-of-type(4n+1) {
         clear: left;
         }
         }
         .expanding-grid .spacer {
         background-color: transparent;
         clear: both;
         display: block;
         #ffb733
         margin: 0 1em;
         }
         .expanding-grid .expanding-container {
         clear: both;
         display: none;
         overflow: hidden;
         width: 100%;
         #ffb733
         }
         .expanding-grid .expanding-container.expanded, .expanding-grid .expanding-container:target {
         display: block;
         }
         .expanding-grid .hentry {
         background-image: url(images/stars-about.png);   
         border: 1px solid white;
         box-sizing: border-box;
         clear: both;
         color: #fff;
         min-height: 4em;
         overflow: hidden;
         padding: 2em;
         width: 100%;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: transparent;
         #ffb733
         }
         .expanding-grid .hentry .entry-image {
         box-sizing: border-box;
         float: right;
         margin-left: 1em;
         padding: 0.25em 0 0.52em 1em;
         text-align: center;
         color:transparent;
         width: 25%;
         }
         .expanding-grid .hentry .entry-title {
         font-size: 1.5em;
         }
         .expanding-grid .close-button {
         background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cGF0aCBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNLjcuN2wxOCAxOG0tMTggMGwxOC0xOCIvPjwvc3ZnPg==) no-repeat scroll 50% 50% transparent;
         color: #fff;
         display: inline-block;
         height: 20px;
         line-height: 1;
         overflow: hidden;
         padding: 1.5em 2em;
         text-decoration: none;
         text-indent: 5em;
         white-space: nowrap;
         width: 20px;
         will-change: opacity;
         z-index: 5;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         }
         .expanding-grid .close-button.active {
         transition: opacity 0.2s;
         }
         .expanding-grid .close-button:hover {
         opacity: 0.5;
         }
         .img-placeholder {
         background: black;
         color:transparent;
         font-size: 4em;
         font-weight: 300;
         line-height: 1;
         padding: 15% 0.25em;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         }
         #stars {
         width: 1px;
         height: 1px;
         background: transparent;
         box-shadow: 259px 1474px #FFF , 1796px 1818px #FFF , 1103px 1365px #FFF , 945px 1037px #FFF , 791px 1440px #FFF , 787px 1318px #FFF , 677px 1138px #FFF , 1665px 930px #FFF , 1885px 1738px #FFF , 1905px 1800px #FFF , 126px 138px #FFF , 1925px 1868px #FFF , 1145px 1782px #FFF , 978px 1898px #FFF , 536px 506px #FFF , 1167px 1737px #FFF , 477px 1270px #FFF , 254px 287px #FFF , 758px 192px #FFF , 1059px 875px #FFF , 1340px 1183px #FFF , 240px 1490px #FFF , 977px 1301px #FFF , 104px 1904px #FFF , 960px 349px #FFF , 1397px 998px #FFF , 914px 1585px #FFF , 1007px 50px #FFF , 1678px 1557px #FFF , 844px 1141px #FFF , 1948px 1537px #FFF , 1047px 1198px #FFF , 665px 762px #FFF , 1628px 235px #FFF , 1719px 329px #FFF , 738px 1944px #FFF , 901px 1481px #FFF , 612px 623px #FFF , 1192px 1227px #FFF , 1202px 1095px #FFF , 1650px 1429px #FFF , 1682px 519px #FFF , 504px 513px #FFF , 510px 1721px #FFF , 961px 1137px #FFF , 1209px 964px #FFF , 1473px 23px #FFF , 10px 1918px #FFF , 489px 1072px #FFF , 1077px 713px #FFF , 937px 573px #FFF , 1941px 942px #FFF , 608px 364px #FFF , 214px 967px #FFF , 164px 139px #FFF , 285px 974px #FFF , 455px 1320px #FFF , 1190px 992px #FFF , 465px 1823px #FFF , 54px 605px #FFF , 836px 819px #FFF , 1937px 568px #FFF , 1172px 1417px #FFF , 1378px 1799px #FFF , 469px 1389px #FFF , 592px 482px #FFF , 277px 21px #FFF , 1096px 853px #FFF , 1650px 1606px #FFF , 1017px 6px #FFF , 179px 764px #FFF , 907px 816px #FFF , 1391px 1825px #FFF , 1357px 449px #FFF , 303px 1355px #FFF , 259px 238px #FFF , 12px 1073px #FFF , 1431px 76px #FFF , 883px 210px #FFF , 506px 371px #FFF , 183px 472px #FFF , 760px 27px #FFF , 520px 1329px #FFF , 988px 18px #FFF , 8px 708px #FFF , 933px 505px #FFF , 442px 1811px #FFF , 8px 1476px #FFF , 1319px 1322px #FFF , 856px 845px #FFF , 815px 19px #FFF , 1361px 444px #FFF , 813px 717px #FFF , 1577px 1215px #FFF , 1955px 1143px #FFF , 356px 1567px #FFF , 453px 1494px #FFF , 1267px 1923px #FFF , 500px 1107px #FFF , 1147px 1903px #FFF , 845px 1329px #FFF , 1827px 84px #FFF , 717px 1561px #FFF , 130px 867px #FFF , 157px 704px #FFF , 1096px 955px #FFF , 667px 27px #FFF , 435px 1020px #FFF , 269px 938px #FFF , 1927px 1338px #FFF , 1698px 483px #FFF , 856px 357px #FFF , 1454px 723px #FFF , 1690px 1577px #FFF , 87px 1714px #FFF , 327px 1939px #FFF , 962px 32px #FFF , 501px 250px #FFF , 847px 1115px #FFF , 180px 598px #FFF , 115px 558px #FFF , 1931px 1292px #FFF , 1169px 1338px #FFF , 1110px 393px #FFF , 1927px 431px #FFF , 735px 1148px #FFF , 1244px 370px #FFF , 479px 877px #FFF , 826px 1034px #FFF , 1306px 312px #FFF , 921px 628px #FFF , 997px 832px #FFF , 404px 855px #FFF , 171px 1534px #FFF , 28px 879px #FFF , 1203px 830px #FFF , 632px 608px #FFF , 1387px 1312px #FFF , 416px 1497px #FFF , 1449px 488px #FFF , 971px 608px #FFF , 391px 654px #FFF , 1793px 35px #FFF , 981px 1082px #FFF , 1471px 1181px #FFF , 793px 1901px #FFF , 1908px 1770px #FFF , 567px 1720px #FFF , 60px 788px #FFF , 7px 1074px #FFF , 430px 235px #FFF , 132px 136px #FFF , 851px 1516px #FFF , 223px 1276px #FFF , 1308px 3px #FFF , 1129px 1685px #FFF , 944px 530px #FFF , 141px 1387px #FFF , 1178px 1687px #FFF , 260px 1686px #FFF , 292px 46px #FFF , 1675px 1210px #FFF , 1022px 1401px #FFF , 1143px 457px #FFF , 297px 988px #FFF , 833px 275px #FFF , 1339px 964px #FFF , 263px 628px #FFF , 1897px 1644px #FFF , 1479px 1047px #FFF , 1532px 1255px #FFF , 430px 833px #FFF , 508px 684px #FFF , 1286px 1232px #FFF , 1514px 688px #FFF , 1364px 1063px #FFF , 913px 1737px #FFF , 1901px 459px #FFF , 1195px 344px #FFF , 498px 727px #FFF , 1292px 355px #FFF , 153px 450px #FFF , 151px 481px #FFF , 404px 1693px #FFF , 707px 700px #FFF , 275px 788px #FFF , 1091px 1609px #FFF , 121px 1528px #FFF , 1712px 294px #FFF , 179px 670px #FFF , 386px 12px #FFF , 1557px 1323px #FFF , 132px 51px #FFF , 362px 126px #FFF , 1654px 1312px #FFF , 50px 762px #FFF , 749px 810px #FFF , 247px 174px #FFF , 193px 1524px #FFF , 1338px 947px #FFF , 464px 875px #FFF , 1754px 1022px #FFF , 451px 1926px #FFF , 1275px 386px #FFF , 400px 751px #FFF , 736px 286px #FFF , 285px 1598px #FFF , 1697px 150px #FFF , 223px 739px #FFF , 996px 1490px #FFF , 1668px 418px #FFF , 1316px 236px #FFF , 532px 1213px #FFF , 1303px 359px #FFF , 987px 1392px #FFF , 943px 609px #FFF , 211px 521px #FFF , 469px 197px #FFF , 1966px 991px #FFF , 1995px 1052px #FFF , 31px 659px #FFF , 1369px 777px #FFF , 894px 1798px #FFF , 1109px 1204px #FFF , 505px 530px #FFF , 1248px 670px #FFF , 1211px 1109px #FFF , 900px 1945px #FFF , 1359px 1704px #FFF , 1349px 498px #FFF , 1044px 1395px #FFF , 1658px 121px #FFF , 501px 1754px #FFF , 973px 676px #FFF , 1928px 838px #FFF , 1137px 1897px #FFF , 475px 105px #FFF , 1396px 1428px #FFF , 1903px 204px #FFF , 1175px 5px #FFF , 1203px 1088px #FFF , 1253px 1074px #FFF , 1262px 4px #FFF , 480px 307px #FFF , 247px 1472px #FFF , 613px 1505px #FFF , 586px 246px #FFF , 1908px 819px #FFF , 189px 1227px #FFF , 1219px 135px #FFF , 785px 569px #FFF , 1633px 229px #FFF , 1168px 1867px #FFF , 1856px 1491px #FFF , 434px 1686px #FFF , 709px 1300px #FFF , 1221px 601px #FFF , 1633px 1033px #FFF , 840px 1302px #FFF , 476px 1663px #FFF , 560px 114px #FFF , 1013px 607px #FFF , 1591px 919px #FFF , 980px 549px #FFF , 1169px 257px #FFF , 279px 114px #FFF , 502px 59px #FFF , 211px 872px #FFF , 113px 406px #FFF , 1651px 1540px #FFF , 408px 826px #FFF , 175px 625px #FFF , 1867px 1606px #FFF , 528px 1270px #FFF , 1492px 751px #FFF , 486px 308px #FFF , 434px 297px #FFF , 1229px 779px #FFF , 473px 1729px #FFF , 826px 116px #FFF , 1473px 895px #FFF , 1740px 859px #FFF , 505px 1766px #FFF , 438px 693px #FFF , 737px 275px #FFF , 1880px 178px #FFF , 129px 1431px #FFF , 421px 1576px #FFF , 1066px 1752px #FFF , 1304px 1517px #FFF , 866px 927px #FFF , 528px 1929px #FFF , 609px 123px #FFF , 1493px 311px #FFF , 398px 1055px #FFF , 1614px 538px #FFF , 1332px 1100px #FFF , 1765px 424px #FFF , 350px 1032px #FFF , 114px 1868px #FFF , 299px 1985px #FFF , 1766px 208px #FFF , 863px 1792px #FFF , 623px 1771px #FFF , 1009px 38px #FFF , 42px 1302px #FFF , 665px 1291px #FFF , 1720px 1383px #FFF , 41px 1124px #FFF , 1450px 1911px #FFF , 1395px 1263px #FFF , 1965px 1354px #FFF , 1488px 644px #FFF , 1092px 89px #FFF , 1620px 398px #FFF , 1566px 544px #FFF , 1185px 1883px #FFF , 341px 329px #FFF , 1347px 1263px #FFF , 804px 222px #FFF , 276px 1416px #FFF , 1621px 1438px #FFF , 151px 1124px #FFF , 235px 953px #FFF , 1374px 1010px #FFF , 230px 996px #FFF , 895px 1377px #FFF , 1601px 403px #FFF , 858px 1736px #FFF , 1510px 1386px #FFF , 1549px 985px #FFF , 664px 1014px #FFF , 1268px 769px #FFF , 1295px 1127px #FFF , 460px 1634px #FFF , 998px 1003px #FFF , 1658px 1622px #FFF , 1557px 280px #FFF , 205px 243px #FFF , 629px 930px #FFF , 1043px 1020px #FFF , 896px 141px #FFF , 1564px 687px #FFF , 792px 187px #FFF , 1045px 1835px #FFF , 808px 1544px #FFF , 1468px 416px #FFF , 432px 1534px #FFF , 625px 1695px #FFF , 922px 1080px #FFF , 1297px 507px #FFF , 347px 1766px #FFF , 1649px 1893px #FFF , 1557px 293px #FFF , 804px 1239px #FFF , 1067px 1258px #FFF , 482px 218px #FFF , 902px 182px #FFF , 1844px 1460px #FFF , 985px 45px #FFF , 961px 612px #FFF , 1384px 31px #FFF , 704px 1788px #FFF , 453px 561px #FFF , 820px 609px #FFF , 976px 1926px #FFF , 1328px 77px #FFF , 693px 1414px #FFF , 641px 24px #FFF , 1657px 536px #FFF , 835px 1703px #FFF , 168px 1458px #FFF , 138px 1494px #FFF , 1327px 1940px #FFF , 1622px 1354px #FFF , 212px 478px #FFF , 462px 807px #FFF , 1699px 1517px #FFF , 128px 159px #FFF , 851px 1690px #FFF , 398px 1661px #FFF , 71px 1327px #FFF , 467px 985px #FFF , 469px 11px #FFF , 145px 314px #FFF , 670px 1642px #FFF , 1316px 1722px #FFF , 1719px 175px #FFF , 545px 1257px #FFF , 436px 1102px #FFF , 1219px 1525px #FFF , 1891px 850px #FFF , 1432px 319px #FFF , 1692px 853px #FFF , 1353px 1745px #FFF , 1631px 1410px #FFF , 550px 1862px #FFF , 918px 806px #FFF , 1038px 540px #FFF , 1396px 1950px #FFF , 909px 1396px #FFF , 1330px 1821px #FFF , 414px 1744px #FFF , 1325px 172px #FFF , 715px 1785px #FFF , 1763px 522px #FFF , 1781px 975px #FFF , 683px 1416px #FFF , 1981px 1871px #FFF , 665px 892px #FFF , 707px 552px #FFF , 577px 1524px #FFF , 1441px 1245px #FFF , 1917px 390px #FFF , 810px 947px #FFF , 15px 1264px #FFF , 1029px 1539px #FFF , 1464px 1028px #FFF , 1802px 794px #FFF , 1432px 1210px #FFF , 1595px 347px #FFF , 1769px 1135px #FFF , 668px 463px #FFF , 1959px 394px #FFF , 1499px 1155px #FFF , 188px 1762px #FFF , 1264px 1715px #FFF , 1646px 1885px #FFF , 1984px 1290px #FFF , 1105px 1648px #FFF , 1779px 660px #FFF , 679px 224px #FFF , 1386px 37px #FFF , 726px 1833px #FFF , 1780px 1459px #FFF , 1902px 276px #FFF , 805px 615px #FFF , 1878px 1189px #FFF , 186px 1304px #FFF , 1204px 251px #FFF , 221px 1258px #FFF , 587px 529px #FFF , 106px 1135px #FFF , 450px 171px #FFF , 1495px 526px #FFF , 235px 1898px #FFF , 1794px 694px #FFF , 1085px 876px #FFF , 1633px 1200px #FFF , 311px 1841px #FFF , 420px 800px #FFF , 222px 190px #FFF , 633px 1366px #FFF , 1981px 282px #FFF , 1347px 213px #FFF , 1601px 733px #FFF , 54px 1534px #FFF , 1615px 752px #FFF , 1717px 1580px #FFF , 360px 1519px #FFF , 1115px 44px #FFF , 1617px 1777px #FFF , 1564px 1570px #FFF , 1478px 729px #FFF , 1222px 1472px #FFF , 1782px 338px #FFF , 1350px 727px #FFF , 1381px 21px #FFF , 63px 1141px #FFF , 81px 1529px #FFF , 116px 1595px #FFF , 45px 864px #FFF , 345px 1620px #FFF , 1688px 1650px #FFF , 1531px 422px #FFF , 1416px 370px #FFF , 231px 1632px #FFF , 73px 922px #FFF , 1162px 834px #FFF , 1530px 188px #FFF , 50px 1231px #FFF , 1408px 1449px #FFF , 760px 1393px #FFF , 1022px 360px #FFF , 167px 1355px #FFF , 895px 907px #FFF , 1553px 8px #FFF , 820px 1839px #FFF , 1937px 1132px #FFF , 1387px 1514px #FFF , 1252px 174px #FFF , 175px 1029px #FFF , 27px 659px #FFF , 1824px 1449px #FFF , 230px 1971px #FFF , 148px 484px #FFF , 1618px 504px #FFF , 385px 1530px #FFF , 1337px 303px #FFF , 335px 673px #FFF , 738px 793px #FFF , 1788px 171px #FFF , 576px 396px #FFF , 819px 1862px #FFF , 238px 1214px #FFF , 486px 639px #FFF , 1101px 1465px #FFF , 115px 1327px #FFF , 233px 1000px #FFF , 1336px 1202px #FFF , 264px 1527px #FFF , 1005px 1442px #FFF , 957px 1903px #FFF , 252px 688px #FFF , 570px 1286px #FFF , 1942px 555px #FFF , 930px 353px #FFF , 1991px 268px #FFF , 954px 343px #FFF , 1007px 1412px #FFF , 1298px 101px #FFF , 450px 62px #FFF , 402px 352px #FFF , 420px 1524px #FFF , 1463px 565px #FFF , 1309px 1634px #FFF , 1985px 629px #FFF , 1965px 1876px #FFF , 1618px 1294px #FFF , 214px 663px #FFF , 1366px 273px #FFF , 569px 362px #FFF , 555px 686px #FFF , 148px 1883px #FFF , 1945px 1147px #FFF , 449px 1781px #FFF , 1442px 830px #FFF , 567px 1109px #FFF , 1562px 1244px #FFF , 571px 1995px #FFF , 1788px 142px #FFF , 1760px 379px #FFF , 790px 1740px #FFF , 1167px 1693px #FFF , 1282px 148px #FFF , 1078px 1568px #FFF , 1266px 1248px #FFF , 400px 680px #FFF , 1199px 1461px #FFF , 846px 1693px #FFF , 1198px 675px #FFF , 301px 1193px #FFF , 839px 292px #FFF , 425px 1829px #FFF , 477px 1267px #FFF , 607px 856px #FFF , 1316px 38px #FFF , 1160px 351px #FFF , 1954px 66px #FFF , 580px 557px #FFF , 1363px 1655px #FFF , 610px 1017px #FFF , 1870px 774px #FFF , 443px 1466px #FFF , 1345px 941px #FFF , 397px 502px #FFF , 1513px 599px #FFF , 1616px 351px #FFF , 621px 932px #FFF , 712px 1770px #FFF , 295px 648px #FFF , 1322px 808px #FFF , 788px 1738px #FFF , 219px 1767px #FFF , 1348px 210px #FFF , 1791px 1729px #FFF , 998px 594px #FFF , 1415px 1644px #FFF , 1316px 1819px #FFF , 310px 69px #FFF , 653px 1577px #FFF , 94px 1971px #FFF , 405px 61px #FFF , 608px 32px #FFF , 26px 841px #FFF , 468px 594px #FFF , 166px 51px #FFF , 1284px 1890px #FFF , 598px 1138px #FFF , 1397px 191px #FFF , 1356px 357px #FFF , 1568px 695px #FFF , 882px 712px #FFF , 1594px 972px #FFF , 233px 826px #FFF , 854px 370px #FFF , 1902px 396px #FFF , 203px 673px #FFF , 1423px 1858px #FFF , 1489px 179px #FFF , 1376px 161px #FFF , 1488px 1673px #FFF , 1496px 1610px #FFF , 496px 1600px #FFF , 1727px 850px #FFF , 1627px 786px #FFF , 1875px 1504px #FFF , 952px 901px #FFF , 1680px 652px #FFF , 998px 540px #FFF , 1712px 1931px #FFF , 1794px 1970px #FFF , 1755px 837px #FFF , 1891px 1679px #FFF , 290px 1175px #FFF , 991px 1538px #FFF , 709px 1084px #FFF , 1358px 707px #FFF , 1638px 126px #FFF , 1581px 29px #FFF , 627px 1520px #FFF , 1841px 753px #FFF , 924px 1711px #FFF , 1212px 1822px #FFF , 459px 61px #FFF , 1071px 1114px #FFF , 1868px 25px #FFF , 1879px 1887px #FFF , 1559px 1958px #FFF , 805px 1014px #FFF , 454px 565px #FFF , 1228px 167px #FFF , 1408px 219px #FFF , 985px 908px #FFF , 1284px 1045px #FFF , 751px 513px #FFF , 819px 233px #FFF , 114px 1382px #FFF , 157px 1644px #FFF , 683px 1304px #FFF , 1577px 1716px #FFF , 390px 576px #FFF , 436px 1863px #FFF , 1393px 406px #FFF , 692px 1210px #FFF , 1463px 559px #FFF , 462px 1621px #FFF , 143px 1219px #FFF , 536px 1919px #FFF , 1148px 1565px #FFF , 594px 1993px #FFF , 341px 732px #FFF , 1574px 410px #FFF , 461px 382px #FFF , 1883px 520px #FFF , 1354px 1093px #FFF , 1188px 899px #FFF , 1168px 267px #FFF , 1881px 933px #FFF , 1216px 117px #FFF , 1453px 910px #FFF , 551px 477px #FFF , 972px 346px #FFF , 729px 228px #FFF , 472px 1378px #FFF , 252px 221px #FFF , 1273px 515px #FFF , 1104px 967px #FFF , 1869px 236px #FFF , 1139px 1480px #FFF , 335px 1058px #FFF , 1963px 1617px #FFF , 444px 445px #FFF , 175px 601px #FFF , 1316px 998px #FFF , 1154px 1879px #FFF , 1728px 994px #FFF , 123px 994px #FFF , 1359px 1437px #FFF , 1386px 1363px #FFF , 60px 1061px #FFF , 1414px 471px #FFF , 1564px 1499px #FFF , 1776px 1861px #FFF , 1757px 1834px #FFF , 316px 270px #FFF , 506px 1902px #FFF , 911px 795px #FFF , 456px 1506px #FFF , 578px 570px #FFF , 1328px 69px #FFF , 728px 1455px #FFF , 1136px 279px #FFF , 1493px 478px #FFF , 360px 440px #FFF , 774px 520px #FFF , 342px 1658px #FFF , 1645px 915px #FFF , 744px 1871px #FFF , 1968px 575px #FFF;
         animation: animStar 50s linear infinite;
         }
         #stars:after {
         position: absolute;
         top: 2000px;
         width: 1px;
         height: 1px;
         background: transparent;
         box-shadow: 259px 1474px #FFF , 1796px 1818px #FFF , 1103px 1365px #FFF , 945px 1037px #FFF , 791px 1440px #FFF , 787px 1318px #FFF , 677px 1138px #FFF , 1665px 930px #FFF , 1885px 1738px #FFF , 1905px 1800px #FFF , 126px 138px #FFF , 1925px 1868px #FFF , 1145px 1782px #FFF , 978px 1898px #FFF , 536px 506px #FFF , 1167px 1737px #FFF , 477px 1270px #FFF , 254px 287px #FFF , 758px 192px #FFF , 1059px 875px #FFF , 1340px 1183px #FFF , 240px 1490px #FFF , 977px 1301px #FFF , 104px 1904px #FFF , 960px 349px #FFF , 1397px 998px #FFF , 914px 1585px #FFF , 1007px 50px #FFF , 1678px 1557px #FFF , 844px 1141px #FFF , 1948px 1537px #FFF , 1047px 1198px #FFF , 665px 762px #FFF , 1628px 235px #FFF , 1719px 329px #FFF , 738px 1944px #FFF , 901px 1481px #FFF , 612px 623px #FFF , 1192px 1227px #FFF , 1202px 1095px #FFF , 1650px 1429px #FFF , 1682px 519px #FFF , 504px 513px #FFF , 510px 1721px #FFF , 961px 1137px #FFF , 1209px 964px #FFF , 1473px 23px #FFF , 10px 1918px #FFF , 489px 1072px #FFF , 1077px 713px #FFF , 937px 573px #FFF , 1941px 942px #FFF , 608px 364px #FFF , 214px 967px #FFF , 164px 139px #FFF , 285px 974px #FFF , 455px 1320px #FFF , 1190px 992px #FFF , 465px 1823px #FFF , 54px 605px #FFF , 836px 819px #FFF , 1937px 568px #FFF , 1172px 1417px #FFF , 1378px 1799px #FFF , 469px 1389px #FFF , 592px 482px #FFF , 277px 21px #FFF , 1096px 853px #FFF , 1650px 1606px #FFF , 1017px 6px #FFF , 179px 764px #FFF , 907px 816px #FFF , 1391px 1825px #FFF , 1357px 449px #FFF , 303px 1355px #FFF , 259px 238px #FFF , 12px 1073px #FFF , 1431px 76px #FFF , 883px 210px #FFF , 506px 371px #FFF , 183px 472px #FFF , 760px 27px #FFF , 520px 1329px #FFF , 988px 18px #FFF , 8px 708px #FFF , 933px 505px #FFF , 442px 1811px #FFF , 8px 1476px #FFF , 1319px 1322px #FFF , 856px 845px #FFF , 815px 19px #FFF , 1361px 444px #FFF , 813px 717px #FFF , 1577px 1215px #FFF , 1955px 1143px #FFF , 356px 1567px #FFF , 453px 1494px #FFF , 1267px 1923px #FFF , 500px 1107px #FFF , 1147px 1903px #FFF , 845px 1329px #FFF , 1827px 84px #FFF , 717px 1561px #FFF , 130px 867px #FFF , 157px 704px #FFF , 1096px 955px #FFF , 667px 27px #FFF , 435px 1020px #FFF , 269px 938px #FFF , 1927px 1338px #FFF , 1698px 483px #FFF , 856px 357px #FFF , 1454px 723px #FFF , 1690px 1577px #FFF , 87px 1714px #FFF , 327px 1939px #FFF , 962px 32px #FFF , 501px 250px #FFF , 847px 1115px #FFF , 180px 598px #FFF , 115px 558px #FFF , 1931px 1292px #FFF , 1169px 1338px #FFF , 1110px 393px #FFF , 1927px 431px #FFF , 735px 1148px #FFF , 1244px 370px #FFF , 479px 877px #FFF , 826px 1034px #FFF , 1306px 312px #FFF , 921px 628px #FFF , 997px 832px #FFF , 404px 855px #FFF , 171px 1534px #FFF , 28px 879px #FFF , 1203px 830px #FFF , 632px 608px #FFF , 1387px 1312px #FFF , 416px 1497px #FFF , 1449px 488px #FFF , 971px 608px #FFF , 391px 654px #FFF , 1793px 35px #FFF , 981px 1082px #FFF , 1471px 1181px #FFF , 793px 1901px #FFF , 1908px 1770px #FFF , 567px 1720px #FFF , 60px 788px #FFF , 7px 1074px #FFF , 430px 235px #FFF , 132px 136px #FFF , 851px 1516px #FFF , 223px 1276px #FFF , 1308px 3px #FFF , 1129px 1685px #FFF , 944px 530px #FFF , 141px 1387px #FFF , 1178px 1687px #FFF , 260px 1686px #FFF , 292px 46px #FFF , 1675px 1210px #FFF , 1022px 1401px #FFF , 1143px 457px #FFF , 297px 988px #FFF , 833px 275px #FFF , 1339px 964px #FFF , 263px 628px #FFF , 1897px 1644px #FFF , 1479px 1047px #FFF , 1532px 1255px #FFF , 430px 833px #FFF , 508px 684px #FFF , 1286px 1232px #FFF , 1514px 688px #FFF , 1364px 1063px #FFF , 913px 1737px #FFF , 1901px 459px #FFF , 1195px 344px #FFF , 498px 727px #FFF , 1292px 355px #FFF , 153px 450px #FFF , 151px 481px #FFF , 404px 1693px #FFF , 707px 700px #FFF , 275px 788px #FFF , 1091px 1609px #FFF , 121px 1528px #FFF , 1712px 294px #FFF , 179px 670px #FFF , 386px 12px #FFF , 1557px 1323px #FFF , 132px 51px #FFF , 362px 126px #FFF , 1654px 1312px #FFF , 50px 762px #FFF , 749px 810px #FFF , 247px 174px #FFF , 193px 1524px #FFF , 1338px 947px #FFF , 464px 875px #FFF , 1754px 1022px #FFF , 451px 1926px #FFF , 1275px 386px #FFF , 400px 751px #FFF , 736px 286px #FFF , 285px 1598px #FFF , 1697px 150px #FFF , 223px 739px #FFF , 996px 1490px #FFF , 1668px 418px #FFF , 1316px 236px #FFF , 532px 1213px #FFF , 1303px 359px #FFF , 987px 1392px #FFF , 943px 609px #FFF , 211px 521px #FFF , 469px 197px #FFF , 1966px 991px #FFF , 1995px 1052px #FFF , 31px 659px #FFF , 1369px 777px #FFF , 894px 1798px #FFF , 1109px 1204px #FFF , 505px 530px #FFF , 1248px 670px #FFF , 1211px 1109px #FFF , 900px 1945px #FFF , 1359px 1704px #FFF , 1349px 498px #FFF , 1044px 1395px #FFF , 1658px 121px #FFF , 501px 1754px #FFF , 973px 676px #FFF , 1928px 838px #FFF , 1137px 1897px #FFF , 475px 105px #FFF , 1396px 1428px #FFF , 1903px 204px #FFF , 1175px 5px #FFF , 1203px 1088px #FFF , 1253px 1074px #FFF , 1262px 4px #FFF , 480px 307px #FFF , 247px 1472px #FFF , 613px 1505px #FFF , 586px 246px #FFF , 1908px 819px #FFF , 189px 1227px #FFF , 1219px 135px #FFF , 785px 569px #FFF , 1633px 229px #FFF , 1168px 1867px #FFF , 1856px 1491px #FFF , 434px 1686px #FFF , 709px 1300px #FFF , 1221px 601px #FFF , 1633px 1033px #FFF , 840px 1302px #FFF , 476px 1663px #FFF , 560px 114px #FFF , 1013px 607px #FFF , 1591px 919px #FFF , 980px 549px #FFF , 1169px 257px #FFF , 279px 114px #FFF , 502px 59px #FFF , 211px 872px #FFF , 113px 406px #FFF , 1651px 1540px #FFF , 408px 826px #FFF , 175px 625px #FFF , 1867px 1606px #FFF , 528px 1270px #FFF , 1492px 751px #FFF , 486px 308px #FFF , 434px 297px #FFF , 1229px 779px #FFF , 473px 1729px #FFF , 826px 116px #FFF , 1473px 895px #FFF , 1740px 859px #FFF , 505px 1766px #FFF , 438px 693px #FFF , 737px 275px #FFF , 1880px 178px #FFF , 129px 1431px #FFF , 421px 1576px #FFF , 1066px 1752px #FFF , 1304px 1517px #FFF , 866px 927px #FFF , 528px 1929px #FFF , 609px 123px #FFF , 1493px 311px #FFF , 398px 1055px #FFF , 1614px 538px #FFF , 1332px 1100px #FFF , 1765px 424px #FFF , 350px 1032px #FFF , 114px 1868px #FFF , 299px 1985px #FFF , 1766px 208px #FFF , 863px 1792px #FFF , 623px 1771px #FFF , 1009px 38px #FFF , 42px 1302px #FFF , 665px 1291px #FFF , 1720px 1383px #FFF , 41px 1124px #FFF , 1450px 1911px #FFF , 1395px 1263px #FFF , 1965px 1354px #FFF , 1488px 644px #FFF , 1092px 89px #FFF , 1620px 398px #FFF , 1566px 544px #FFF , 1185px 1883px #FFF , 341px 329px #FFF , 1347px 1263px #FFF , 804px 222px #FFF , 276px 1416px #FFF , 1621px 1438px #FFF , 151px 1124px #FFF , 235px 953px #FFF , 1374px 1010px #FFF , 230px 996px #FFF , 895px 1377px #FFF , 1601px 403px #FFF , 858px 1736px #FFF , 1510px 1386px #FFF , 1549px 985px #FFF , 664px 1014px #FFF , 1268px 769px #FFF , 1295px 1127px #FFF , 460px 1634px #FFF , 998px 1003px #FFF , 1658px 1622px #FFF , 1557px 280px #FFF , 205px 243px #FFF , 629px 930px #FFF , 1043px 1020px #FFF , 896px 141px #FFF , 1564px 687px #FFF , 792px 187px #FFF , 1045px 1835px #FFF , 808px 1544px #FFF , 1468px 416px #FFF , 432px 1534px #FFF , 625px 1695px #FFF , 922px 1080px #FFF , 1297px 507px #FFF , 347px 1766px #FFF , 1649px 1893px #FFF , 1557px 293px #FFF , 804px 1239px #FFF , 1067px 1258px #FFF , 482px 218px #FFF , 902px 182px #FFF , 1844px 1460px #FFF , 985px 45px #FFF , 961px 612px #FFF , 1384px 31px #FFF , 704px 1788px #FFF , 453px 561px #FFF , 820px 609px #FFF , 976px 1926px #FFF , 1328px 77px #FFF , 693px 1414px #FFF , 641px 24px #FFF , 1657px 536px #FFF , 835px 1703px #FFF , 168px 1458px #FFF , 138px 1494px #FFF , 1327px 1940px #FFF , 1622px 1354px #FFF , 212px 478px #FFF , 462px 807px #FFF , 1699px 1517px #FFF , 128px 159px #FFF , 851px 1690px #FFF , 398px 1661px #FFF , 71px 1327px #FFF , 467px 985px #FFF , 469px 11px #FFF , 145px 314px #FFF , 670px 1642px #FFF , 1316px 1722px #FFF , 1719px 175px #FFF , 545px 1257px #FFF , 436px 1102px #FFF , 1219px 1525px #FFF , 1891px 850px #FFF , 1432px 319px #FFF , 1692px 853px #FFF , 1353px 1745px #FFF , 1631px 1410px #FFF , 550px 1862px #FFF , 918px 806px #FFF , 1038px 540px #FFF , 1396px 1950px #FFF , 909px 1396px #FFF , 1330px 1821px #FFF , 414px 1744px #FFF , 1325px 172px #FFF , 715px 1785px #FFF , 1763px 522px #FFF , 1781px 975px #FFF , 683px 1416px #FFF , 1981px 1871px #FFF , 665px 892px #FFF , 707px 552px #FFF , 577px 1524px #FFF , 1441px 1245px #FFF , 1917px 390px #FFF , 810px 947px #FFF , 15px 1264px #FFF , 1029px 1539px #FFF , 1464px 1028px #FFF , 1802px 794px #FFF , 1432px 1210px #FFF , 1595px 347px #FFF , 1769px 1135px #FFF , 668px 463px #FFF , 1959px 394px #FFF , 1499px 1155px #FFF , 188px 1762px #FFF , 1264px 1715px #FFF , 1646px 1885px #FFF , 1984px 1290px #FFF , 1105px 1648px #FFF , 1779px 660px #FFF , 679px 224px #FFF , 1386px 37px #FFF , 726px 1833px #FFF , 1780px 1459px #FFF , 1902px 276px #FFF , 805px 615px #FFF , 1878px 1189px #FFF , 186px 1304px #FFF , 1204px 251px #FFF , 221px 1258px #FFF , 587px 529px #FFF , 106px 1135px #FFF , 450px 171px #FFF , 1495px 526px #FFF , 235px 1898px #FFF , 1794px 694px #FFF , 1085px 876px #FFF , 1633px 1200px #FFF , 311px 1841px #FFF , 420px 800px #FFF , 222px 190px #FFF , 633px 1366px #FFF , 1981px 282px #FFF , 1347px 213px #FFF , 1601px 733px #FFF , 54px 1534px #FFF , 1615px 752px #FFF , 1717px 1580px #FFF , 360px 1519px #FFF , 1115px 44px #FFF , 1617px 1777px #FFF , 1564px 1570px #FFF , 1478px 729px #FFF , 1222px 1472px #FFF , 1782px 338px #FFF , 1350px 727px #FFF , 1381px 21px #FFF , 63px 1141px #FFF , 81px 1529px #FFF , 116px 1595px #FFF , 45px 864px #FFF , 345px 1620px #FFF , 1688px 1650px #FFF , 1531px 422px #FFF , 1416px 370px #FFF , 231px 1632px #FFF , 73px 922px #FFF , 1162px 834px #FFF , 1530px 188px #FFF , 50px 1231px #FFF , 1408px 1449px #FFF , 760px 1393px #FFF , 1022px 360px #FFF , 167px 1355px #FFF , 895px 907px #FFF , 1553px 8px #FFF , 820px 1839px #FFF , 1937px 1132px #FFF , 1387px 1514px #FFF , 1252px 174px #FFF , 175px 1029px #FFF , 27px 659px #FFF , 1824px 1449px #FFF , 230px 1971px #FFF , 148px 484px #FFF , 1618px 504px #FFF , 385px 1530px #FFF , 1337px 303px #FFF , 335px 673px #FFF , 738px 793px #FFF , 1788px 171px #FFF , 576px 396px #FFF , 819px 1862px #FFF , 238px 1214px #FFF , 486px 639px #FFF , 1101px 1465px #FFF , 115px 1327px #FFF , 233px 1000px #FFF , 1336px 1202px #FFF , 264px 1527px #FFF , 1005px 1442px #FFF , 957px 1903px #FFF , 252px 688px #FFF , 570px 1286px #FFF , 1942px 555px #FFF , 930px 353px #FFF , 1991px 268px #FFF , 954px 343px #FFF , 1007px 1412px #FFF , 1298px 101px #FFF , 450px 62px #FFF , 402px 352px #FFF , 420px 1524px #FFF , 1463px 565px #FFF , 1309px 1634px #FFF , 1985px 629px #FFF , 1965px 1876px #FFF , 1618px 1294px #FFF , 214px 663px #FFF , 1366px 273px #FFF , 569px 362px #FFF , 555px 686px #FFF , 148px 1883px #FFF , 1945px 1147px #FFF , 449px 1781px #FFF , 1442px 830px #FFF , 567px 1109px #FFF , 1562px 1244px #FFF , 571px 1995px #FFF , 1788px 142px #FFF , 1760px 379px #FFF , 790px 1740px #FFF , 1167px 1693px #FFF , 1282px 148px #FFF , 1078px 1568px #FFF , 1266px 1248px #FFF , 400px 680px #FFF , 1199px 1461px #FFF , 846px 1693px #FFF , 1198px 675px #FFF , 301px 1193px #FFF , 839px 292px #FFF , 425px 1829px #FFF , 477px 1267px #FFF , 607px 856px #FFF , 1316px 38px #FFF , 1160px 351px #FFF , 1954px 66px #FFF , 580px 557px #FFF , 1363px 1655px #FFF , 610px 1017px #FFF , 1870px 774px #FFF , 443px 1466px #FFF , 1345px 941px #FFF , 397px 502px #FFF , 1513px 599px #FFF , 1616px 351px #FFF , 621px 932px #FFF , 712px 1770px #FFF , 295px 648px #FFF , 1322px 808px #FFF , 788px 1738px #FFF , 219px 1767px #FFF , 1348px 210px #FFF , 1791px 1729px #FFF , 998px 594px #FFF , 1415px 1644px #FFF , 1316px 1819px #FFF , 310px 69px #FFF , 653px 1577px #FFF , 94px 1971px #FFF , 405px 61px #FFF , 608px 32px #FFF , 26px 841px #FFF , 468px 594px #FFF , 166px 51px #FFF , 1284px 1890px #FFF , 598px 1138px #FFF , 1397px 191px #FFF , 1356px 357px #FFF , 1568px 695px #FFF , 882px 712px #FFF , 1594px 972px #FFF , 233px 826px #FFF , 854px 370px #FFF , 1902px 396px #FFF , 203px 673px #FFF , 1423px 1858px #FFF , 1489px 179px #FFF , 1376px 161px #FFF , 1488px 1673px #FFF , 1496px 1610px #FFF , 496px 1600px #FFF , 1727px 850px #FFF , 1627px 786px #FFF , 1875px 1504px #FFF , 952px 901px #FFF , 1680px 652px #FFF , 998px 540px #FFF , 1712px 1931px #FFF , 1794px 1970px #FFF , 1755px 837px #FFF , 1891px 1679px #FFF , 290px 1175px #FFF , 991px 1538px #FFF , 709px 1084px #FFF , 1358px 707px #FFF , 1638px 126px #FFF , 1581px 29px #FFF , 627px 1520px #FFF , 1841px 753px #FFF , 924px 1711px #FFF , 1212px 1822px #FFF , 459px 61px #FFF , 1071px 1114px #FFF , 1868px 25px #FFF , 1879px 1887px #FFF , 1559px 1958px #FFF , 805px 1014px #FFF , 454px 565px #FFF , 1228px 167px #FFF , 1408px 219px #FFF , 985px 908px #FFF , 1284px 1045px #FFF , 751px 513px #FFF , 819px 233px #FFF , 114px 1382px #FFF , 157px 1644px #FFF , 683px 1304px #FFF , 1577px 1716px #FFF , 390px 576px #FFF , 436px 1863px #FFF , 1393px 406px #FFF , 692px 1210px #FFF , 1463px 559px #FFF , 462px 1621px #FFF , 143px 1219px #FFF , 536px 1919px #FFF , 1148px 1565px #FFF , 594px 1993px #FFF , 341px 732px #FFF , 1574px 410px #FFF , 461px 382px #FFF , 1883px 520px #FFF , 1354px 1093px #FFF , 1188px 899px #FFF , 1168px 267px #FFF , 1881px 933px #FFF , 1216px 117px #FFF , 1453px 910px #FFF , 551px 477px #FFF , 972px 346px #FFF , 729px 228px #FFF , 472px 1378px #FFF , 252px 221px #FFF , 1273px 515px #FFF , 1104px 967px #FFF , 1869px 236px #FFF , 1139px 1480px #FFF , 335px 1058px #FFF , 1963px 1617px #FFF , 444px 445px #FFF , 175px 601px #FFF , 1316px 998px #FFF , 1154px 1879px #FFF , 1728px 994px #FFF , 123px 994px #FFF , 1359px 1437px #FFF , 1386px 1363px #FFF , 60px 1061px #FFF , 1414px 471px #FFF , 1564px 1499px #FFF , 1776px 1861px #FFF , 1757px 1834px #FFF , 316px 270px #FFF , 506px 1902px #FFF , 911px 795px #FFF , 456px 1506px #FFF , 578px 570px #FFF , 1328px 69px #FFF , 728px 1455px #FFF , 1136px 279px #FFF , 1493px 478px #FFF , 360px 440px #FFF , 774px 520px #FFF , 342px 1658px #FFF , 1645px 915px #FFF , 744px 1871px #FFF , 1968px 575px #FFF;
         }
         #stars2 {
         width: 2px;
         height: 2px;
         background: transparent;
         box-shadow: 679px 1880px #FFF , 499px 1382px #FFF , 1225px 1756px #FFF , 442px 1811px #FFF , 1257px 1729px #FFF , 1731px 1159px #FFF , 1790px 389px #FFF , 1578px 473px #FFF , 862px 1816px #FFF , 1548px 432px #FFF , 42px 1474px #FFF , 118px 1710px #FFF , 209px 59px #FFF , 951px 331px #FFF , 132px 1330px #FFF , 1460px 433px #FFF , 283px 182px #FFF , 1232px 695px #FFF , 872px 269px #FFF , 1767px 275px #FFF , 1610px 1815px #FFF , 253px 178px #FFF , 1932px 549px #FFF , 484px 1561px #FFF , 1019px 1582px #FFF , 252px 1695px #FFF , 1311px 1220px #FFF , 1868px 994px #FFF , 436px 161px #FFF , 1179px 949px #FFF , 366px 478px #FFF , 1419px 1535px #FFF , 691px 536px #FFF , 1367px 1668px #FFF , 854px 1024px #FFF , 1958px 1302px #FFF , 743px 1258px #FFF , 280px 1774px #FFF , 1013px 525px #FFF , 760px 1657px #FFF , 1539px 1033px #FFF , 1737px 360px #FFF , 1712px 535px #FFF , 1607px 120px #FFF , 1200px 1184px #FFF , 969px 442px #FFF , 1730px 1349px #FFF , 1300px 536px #FFF , 1165px 1433px #FFF , 1185px 1267px #FFF , 1584px 617px #FFF , 1448px 1618px #FFF , 1558px 1920px #FFF , 1343px 236px #FFF , 585px 186px #FFF , 109px 1051px #FFF , 974px 589px #FFF , 1690px 1677px #FFF , 463px 988px #FFF , 530px 1051px #FFF , 1666px 477px #FFF , 270px 253px #FFF , 44px 1007px #FFF , 520px 1423px #FFF , 493px 1261px #FFF , 1388px 655px #FFF , 1265px 55px #FFF , 429px 1766px #FFF , 592px 478px #FFF , 847px 963px #FFF , 482px 1245px #FFF , 735px 566px #FFF , 923px 45px #FFF , 918px 602px #FFF , 1959px 357px #FFF , 1335px 794px #FFF , 814px 28px #FFF , 1278px 986px #FFF , 1109px 1052px #FFF , 308px 237px #FFF , 180px 1112px #FFF , 995px 998px #FFF , 473px 1814px #FFF , 761px 764px #FFF , 971px 1249px #FFF , 1579px 316px #FFF , 106px 627px #FFF , 1557px 979px #FFF , 939px 1348px #FFF , 1282px 42px #FFF , 1943px 757px #FFF , 1726px 572px #FFF , 30px 1549px #FFF , 1214px 1347px #FFF , 1611px 794px #FFF , 599px 1624px #FFF , 1121px 1386px #FFF , 1297px 1791px #FFF , 1364px 1907px #FFF , 1061px 137px #FFF , 990px 835px #FFF , 1719px 1489px #FFF , 260px 753px #FFF , 1127px 1276px #FFF , 907px 151px #FFF , 1556px 1148px #FFF , 498px 968px #FFF , 1073px 1977px #FFF , 654px 1447px #FFF , 54px 246px #FFF , 1754px 793px #FFF , 1193px 621px #FFF , 1558px 1498px #FFF , 302px 286px #FFF , 1129px 1667px #FFF , 107px 1566px #FFF , 172px 673px #FFF , 129px 841px #FFF , 126px 634px #FFF , 1561px 1039px #FFF , 1853px 1365px #FFF , 1650px 1235px #FFF , 308px 954px #FFF , 220px 797px #FFF , 1776px 1723px #FFF , 490px 1297px #FFF , 489px 1640px #FFF , 577px 1306px #FFF , 1320px 84px #FFF , 1096px 48px #FFF , 1833px 1994px #FFF , 44px 583px #FFF , 1220px 787px #FFF , 1907px 1460px #FFF , 702px 842px #FFF , 1900px 1716px #FFF , 879px 1761px #FFF , 13px 1661px #FFF , 1502px 1966px #FFF , 1668px 1444px #FFF , 1395px 419px #FFF , 553px 1839px #FFF , 662px 1233px #FFF , 151px 1645px #FFF , 232px 1144px #FFF , 453px 1352px #FFF , 1112px 909px #FFF , 1686px 702px #FFF , 1609px 1110px #FFF , 614px 59px #FFF , 1404px 1029px #FFF , 1416px 1475px #FFF , 391px 1407px #FFF , 1896px 984px #FFF , 534px 1583px #FFF , 1831px 1653px #FFF , 359px 455px #FFF , 151px 1430px #FFF , 675px 924px #FFF , 596px 212px #FFF , 105px 206px #FFF , 1284px 1876px #FFF , 246px 607px #FFF , 238px 108px #FFF , 1248px 753px #FFF , 666px 1309px #FFF , 39px 459px #FFF , 1646px 1564px #FFF , 1809px 1339px #FFF , 1072px 1090px #FFF , 480px 1037px #FFF , 436px 647px #FFF , 1169px 1358px #FFF , 1154px 648px #FFF , 1027px 876px #FFF , 613px 995px #FFF , 426px 1235px #FFF , 704px 932px #FFF , 342px 85px #FFF , 851px 1952px #FFF , 386px 523px #FFF , 721px 1998px #FFF , 155px 364px #FFF , 123px 538px #FFF , 1677px 37px #FFF , 1776px 1821px #FFF , 1362px 1705px #FFF , 1923px 1659px #FFF , 239px 803px #FFF , 1016px 178px #FFF , 1487px 1949px #FFF , 1021px 600px #FFF , 791px 1908px #FFF , 1282px 379px #FFF , 1959px 1787px #FFF , 861px 854px #FFF , 1714px 1175px #FFF , 123px 264px #FFF , 469px 1868px #FFF , 1065px 1505px #FFF;
         animation: animStar 100s linear infinite;
         }
         #stars2:after {
         position: absolute;
         top: 2000px;
         width: 2px;
         height: 2px;
         background: transparent;
         box-shadow: 679px 1880px #FFF , 499px 1382px #FFF , 1225px 1756px #FFF , 442px 1811px #FFF , 1257px 1729px #FFF , 1731px 1159px #FFF , 1790px 389px #FFF , 1578px 473px #FFF , 862px 1816px #FFF , 1548px 432px #FFF , 42px 1474px #FFF , 118px 1710px #FFF , 209px 59px #FFF , 951px 331px #FFF , 132px 1330px #FFF , 1460px 433px #FFF , 283px 182px #FFF , 1232px 695px #FFF , 872px 269px #FFF , 1767px 275px #FFF , 1610px 1815px #FFF , 253px 178px #FFF , 1932px 549px #FFF , 484px 1561px #FFF , 1019px 1582px #FFF , 252px 1695px #FFF , 1311px 1220px #FFF , 1868px 994px #FFF , 436px 161px #FFF , 1179px 949px #FFF , 366px 478px #FFF , 1419px 1535px #FFF , 691px 536px #FFF , 1367px 1668px #FFF , 854px 1024px #FFF , 1958px 1302px #FFF , 743px 1258px #FFF , 280px 1774px #FFF , 1013px 525px #FFF , 760px 1657px #FFF , 1539px 1033px #FFF , 1737px 360px #FFF , 1712px 535px #FFF , 1607px 120px #FFF , 1200px 1184px #FFF , 969px 442px #FFF , 1730px 1349px #FFF , 1300px 536px #FFF , 1165px 1433px #FFF , 1185px 1267px #FFF , 1584px 617px #FFF , 1448px 1618px #FFF , 1558px 1920px #FFF , 1343px 236px #FFF , 585px 186px #FFF , 109px 1051px #FFF , 974px 589px #FFF , 1690px 1677px #FFF , 463px 988px #FFF , 530px 1051px #FFF , 1666px 477px #FFF , 270px 253px #FFF , 44px 1007px #FFF , 520px 1423px #FFF , 493px 1261px #FFF , 1388px 655px #FFF , 1265px 55px #FFF , 429px 1766px #FFF , 592px 478px #FFF , 847px 963px #FFF , 482px 1245px #FFF , 735px 566px #FFF , 923px 45px #FFF , 918px 602px #FFF , 1959px 357px #FFF , 1335px 794px #FFF , 814px 28px #FFF , 1278px 986px #FFF , 1109px 1052px #FFF , 308px 237px #FFF , 180px 1112px #FFF , 995px 998px #FFF , 473px 1814px #FFF , 761px 764px #FFF , 971px 1249px #FFF , 1579px 316px #FFF , 106px 627px #FFF , 1557px 979px #FFF , 939px 1348px #FFF , 1282px 42px #FFF , 1943px 757px #FFF , 1726px 572px #FFF , 30px 1549px #FFF , 1214px 1347px #FFF , 1611px 794px #FFF , 599px 1624px #FFF , 1121px 1386px #FFF , 1297px 1791px #FFF , 1364px 1907px #FFF , 1061px 137px #FFF , 990px 835px #FFF , 1719px 1489px #FFF , 260px 753px #FFF , 1127px 1276px #FFF , 907px 151px #FFF , 1556px 1148px #FFF , 498px 968px #FFF , 1073px 1977px #FFF , 654px 1447px #FFF , 54px 246px #FFF , 1754px 793px #FFF , 1193px 621px #FFF , 1558px 1498px #FFF , 302px 286px #FFF , 1129px 1667px #FFF , 107px 1566px #FFF , 172px 673px #FFF , 129px 841px #FFF , 126px 634px #FFF , 1561px 1039px #FFF , 1853px 1365px #FFF , 1650px 1235px #FFF , 308px 954px #FFF , 220px 797px #FFF , 1776px 1723px #FFF , 490px 1297px #FFF , 489px 1640px #FFF , 577px 1306px #FFF , 1320px 84px #FFF , 1096px 48px #FFF , 1833px 1994px #FFF , 44px 583px #FFF , 1220px 787px #FFF , 1907px 1460px #FFF , 702px 842px #FFF , 1900px 1716px #FFF , 879px 1761px #FFF , 13px 1661px #FFF , 1502px 1966px #FFF , 1668px 1444px #FFF , 1395px 419px #FFF , 553px 1839px #FFF , 662px 1233px #FFF , 151px 1645px #FFF , 232px 1144px #FFF , 453px 1352px #FFF , 1112px 909px #FFF , 1686px 702px #FFF , 1609px 1110px #FFF , 614px 59px #FFF , 1404px 1029px #FFF , 1416px 1475px #FFF , 391px 1407px #FFF , 1896px 984px #FFF , 534px 1583px #FFF , 1831px 1653px #FFF , 359px 455px #FFF , 151px 1430px #FFF , 675px 924px #FFF , 596px 212px #FFF , 105px 206px #FFF , 1284px 1876px #FFF , 246px 607px #FFF , 238px 108px #FFF , 1248px 753px #FFF , 666px 1309px #FFF , 39px 459px #FFF , 1646px 1564px #FFF , 1809px 1339px #FFF , 1072px 1090px #FFF , 480px 1037px #FFF , 436px 647px #FFF , 1169px 1358px #FFF , 1154px 648px #FFF , 1027px 876px #FFF , 613px 995px #FFF , 426px 1235px #FFF , 704px 932px #FFF , 342px 85px #FFF , 851px 1952px #FFF , 386px 523px #FFF , 721px 1998px #FFF , 155px 364px #FFF , 123px 538px #FFF , 1677px 37px #FFF , 1776px 1821px #FFF , 1362px 1705px #FFF , 1923px 1659px #FFF , 239px 803px #FFF , 1016px 178px #FFF , 1487px 1949px #FFF , 1021px 600px #FFF , 791px 1908px #FFF , 1282px 379px #FFF , 1959px 1787px #FFF , 861px 854px #FFF , 1714px 1175px #FFF , 123px 264px #FFF , 469px 1868px #FFF , 1065px 1505px #FFF;
         }
         #stars3 {
         width: 3px;
         height: 3px;
         background: transparent;
         box-shadow: 1046px 1171px #FFF , 35px 173px #FFF , 1674px 1047px #FFF , 1560px 1518px #FFF , 25px 434px #FFF , 507px 362px #FFF , 962px 1920px #FFF , 1812px 827px #FFF , 810px 231px #FFF , 714px 1311px #FFF , 56px 270px #FFF , 1551px 805px #FFF , 575px 1304px #FFF , 872px 1868px #FFF , 1923px 1377px #FFF , 197px 1185px #FFF , 440px 1345px #FFF , 689px 1750px #FFF , 770px 1067px #FFF , 1436px 36px #FFF , 1426px 419px #FFF , 1341px 1198px #FFF , 1538px 308px #FFF , 460px 1960px #FFF , 1167px 1557px #FFF , 51px 424px #FFF , 1172px 1583px #FFF , 475px 1629px #FFF , 1139px 613px #FFF , 1128px 1771px #FFF , 206px 833px #FFF , 1071px 807px #FFF , 1618px 195px #FFF , 937px 399px #FFF , 1524px 421px #FFF , 1408px 814px #FFF , 383px 715px #FFF , 1451px 1362px #FFF , 309px 1325px #FFF , 585px 1461px #FFF , 46px 1725px #FFF , 1500px 1548px #FFF , 1431px 1511px #FFF , 52px 1100px #FFF , 1637px 1901px #FFF , 1847px 31px #FFF , 1661px 119px #FFF , 1271px 591px #FFF , 1115px 1246px #FFF , 801px 288px #FFF , 1353px 1179px #FFF , 1485px 23px #FFF , 835px 92px #FFF , 1370px 1335px #FFF , 1411px 1406px #FFF , 1106px 1988px #FFF , 1980px 1083px #FFF , 859px 861px #FFF , 100px 523px #FFF , 405px 1879px #FFF , 567px 1757px #FFF , 467px 346px #FFF , 1390px 1349px #FFF , 1124px 1110px #FFF , 897px 1410px #FFF , 758px 225px #FFF , 1776px 1176px #FFF , 1080px 245px #FFF , 1030px 824px #FFF , 882px 549px #FFF , 1978px 915px #FFF , 1562px 1341px #FFF , 880px 1105px #FFF , 554px 27px #FFF , 953px 1556px #FFF , 634px 943px #FFF , 1576px 1282px #FFF , 449px 1274px #FFF , 1497px 1495px #FFF , 130px 297px #FFF , 1310px 197px #FFF , 109px 636px #FFF , 330px 1870px #FFF , 1713px 456px #FFF , 1888px 559px #FFF , 1126px 1609px #FFF , 1159px 71px #FFF , 1948px 638px #FFF , 199px 381px #FFF , 1389px 1801px #FFF , 1535px 199px #FFF , 330px 1725px #FFF , 1809px 1702px #FFF , 961px 1255px #FFF , 397px 1320px #FFF , 628px 16px #FFF , 1846px 1939px #FFF , 1134px 463px #FFF , 422px 1315px #FFF , 938px 884px #FFF;
         animation: animStar 150s linear infinite;
         }
         #stars3:after {
         position: absolute;
         width: 3px;
         height: 3px;
         background: transparent;
         box-shadow: 1046px 1171px #FFF , 35px 173px #FFF , 1674px 1047px #FFF , 1560px 1518px #FFF , 25px 434px #FFF , 507px 362px #FFF , 962px 1920px #FFF , 1812px 827px #FFF , 810px 231px #FFF , 714px 1311px #FFF , 56px 270px #FFF , 1551px 805px #FFF , 575px 1304px #FFF , 872px 1868px #FFF , 1923px 1377px #FFF , 197px 1185px #FFF , 440px 1345px #FFF , 689px 1750px #FFF , 770px 1067px #FFF , 1436px 36px #FFF , 1426px 419px #FFF , 1341px 1198px #FFF , 1538px 308px #FFF , 460px 1960px #FFF , 1167px 1557px #FFF , 51px 424px #FFF , 1172px 1583px #FFF , 475px 1629px #FFF , 1139px 613px #FFF , 1128px 1771px #FFF , 206px 833px #FFF , 1071px 807px #FFF , 1618px 195px #FFF , 937px 399px #FFF , 1524px 421px #FFF , 1408px 814px #FFF , 383px 715px #FFF , 1451px 1362px #FFF , 309px 1325px #FFF , 585px 1461px #FFF , 46px 1725px #FFF , 1500px 1548px #FFF , 1431px 1511px #FFF , 52px 1100px #FFF , 1637px 1901px #FFF , 1847px 31px #FFF , 1661px 119px #FFF , 1271px 591px #FFF , 1115px 1246px #FFF , 801px 288px #FFF , 1353px 1179px #FFF , 1485px 23px #FFF , 835px 92px #FFF , 1370px 1335px #FFF , 1411px 1406px #FFF , 1106px 1988px #FFF , 1980px 1083px #FFF , 859px 861px #FFF , 100px 523px #FFF , 405px 1879px #FFF , 567px 1757px #FFF , 467px 346px #FFF , 1390px 1349px #FFF , 1124px 1110px #FFF , 897px 1410px #FFF , 758px 225px #FFF , 1776px 1176px #FFF , 1080px 245px #FFF , 1030px 824px #FFF , 882px 549px #FFF , 1978px 915px #FFF , 1562px 1341px #FFF , 880px 1105px #FFF , 554px 27px #FFF , 953px 1556px #FFF , 634px 943px #FFF , 1576px 1282px #FFF , 449px 1274px #FFF , 1497px 1495px #FFF , 130px 297px #FFF , 1310px 197px #FFF , 109px 636px #FFF , 330px 1870px #FFF , 1713px 456px #FFF , 1888px 559px #FFF , 1126px 1609px #FFF , 1159px 71px #FFF , 1948px 638px #FFF , 199px 381px #FFF , 1389px 1801px #FFF , 1535px 199px #FFF , 330px 1725px #FFF , 1809px 1702px #FFF , 961px 1255px #FFF , 397px 1320px #FFF , 628px 16px #FFF , 1846px 1939px #FFF , 1134px 463px #FFF , 422px 1315px #FFF , 938px 884px #FFF;
         }
         @keyframes animStar {
         from {
         transform: translateY(0px);
         }
         to {
         transform: translateY(-2000px);
         }}
         .grow{
         transition: transform .2s;
         }
         .grow:hover
         {
         -webkit-transform: scale(1.1);
         -ms-transform: scale(1.1);
         transform: scale(1.1);
         opacity:0.8;
         }
         .backbtn:hover{
         opacity:0.7;
         }
      </style>
      <script>
         window.console = window.console || function(t) {};
      </script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
         function relocate_events()
          {
              location.href = "events.php";
          } 
      </script>
   </head>
   <body >
      <?php include('navbar.php') ; ?>
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <header class="clearfix">
         <button onclick=" relocate_events()" type="button" style="margin-left:30px; width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default backbtn "> &laquo; Back</button>
         <h2 style="font-size:30px; text-align: center; font-family: 'Raleway', sans-serif;color:#bdbdbd">Civil Engineering</h2>
         <h3 style="font-size:20px; text-align: center;font-family: 'Raleway', sans-serif;color:#bdbdbd">Events</h3>
      </header>
      <div class="expanding-grid ">
         <ul  class="links">
            <li class="grow"> <a style="opacity:0.8; color:transparent; border:1px #bdbdbd solid; height: 225px; background-image: url(images/civil/tower.png);" href="#section1"></a></li>
            <li class="grow"><a style="opacity:0.8; color:transparent; border:1px  #bdbdbd  solid;  height: 225px; background-image: url(images/civil/landsurvey.png);" href="#section2">2</a></li>
            <li class="grow"><a style="opacity:0.8; color:transparent;border:1px  #bdbdbd  solid; height: 225px; background-image: url(images/civil/structure.png);"   href="#section3">3</a></li>
            <li><a style=" background-image: url(images/stars-about.png);    "  href="#section5"></a></li>
            <li><a style=" background-image: url(images/stars-about.png);    "  href="#section5"></a></li>
            <li class="grow"><a style="opacity:0.5; color:transparent;border:1px  #bdbdbd  solid; height: 225px; background-image: url(images/civil/quiz.png);" href="#section4">4</a></li>
            <li class="grow"><a style="opacity:0.8; color:transparent;border:1px  #bdbdbd  solid; height: 225px; background-image: url(images/civil/bridge.png);"href="#section6">6</a></li>
            <li class="grow"><a style="opacity:0.8; color:transparent;border:1px  #bdbdbd  solid; height: 225px; background-image: url(images/civil/caddmane.png);" href="#section7">7</a></li>
         </ul>
         <div  id="section1" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">TOWER BUILDER</h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/tower.png)" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>The high rises known for load bearing columns and supports for the tall story buildings. In this event the ability to build the tallest tower with the maximum duration of time is tested.</li>
                        <li>Materials will be reviled on spot.</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants : 3 participants per team</li>
                        <li>Rounds: 2 rounds </li>
                        <li>Venue: Civil drawing hall 1</li>
                        <li>Prize: Attractive cash prize</li>
                        <li>
                           Contacts:
                           <ul>
                              <li> SUSHMA V BHATT (9738954565)</li>
                              <li>BHUMIKA K GOWDA (9066486263)</li>
                              <li>RAHUL S (9108312549)</li>
                           </ul>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
         <div id="section2" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">QUICK SURVEY</h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/landsurvey.png);" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="h-tab" data-toggle="tab" href="#h" role="tab" aria-controls="h" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="p-tab" data-toggle="tab" href="#p" role="tab" aria-controls="p" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="h" role="tabpanel" aria-labelledby="h-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Surveying or land surveying is the technique and science of determining the terrestrial or three dimensional position of points and the distance and angles between them. This event provides you an opportunity to showcase your ease and the speed for surveying in a short duration of time. Grab it surveyours!!</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="p-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants: 3 participants per team</li>
                        <li>Rounds: 3 rounds </li>
                        <li>Venue: Round 1- survey lab ,Round 2 and 3- college ground</li>
                        <li>Prize: Attractive cash prize</li>
                        <li>Contacts</li>
                        <li>DEEPAK CM (8123450381)</li>
                        <li>VINOD J BHARATH (8884341845)</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
         <div id="section3" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">STRUCTURE CAPTURE</h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/structure.png);" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="h1-tab" data-toggle="tab" href="#h1" role="tab" aria-controls="h1" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="p1-tab" data-toggle="tab" href="#p1" role="tab" aria-controls="p1" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="h1" role="tabpanel" aria-labelledby="h1-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>How well do we know our college campus? Well, that will be put to test through this competition. Knowing the structure of the college we study in is very important and if you don’t, this event helps you in identifying every wall and every pillar of our college with fun and competence.</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="p1" role="tabpanel" aria-labelledby="p1-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants: 3 participants per team</li>
                        <li> Rounds  :3 rounds.</li>
                        <li>Venue: College campus</li>
                        <li>Prize: Certificates will be given </li>
                        <li>Contacts: Sunil V (8970630759) </li>
                        <li>Chandra shekar (8747838072)</li>
                        <li>Ruchitha R V (7760400931)</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
         <div id="section4" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">QUIZ</h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/quiz.png);;" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="h2-tab" data-toggle="tab" href="#h2" role="tab" aria-controls="h2" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="p2-tab" data-toggle="tab" href="#p2" role="tab" aria-controls="p2" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="h2" role="tabpanel" aria-labelledby="h2-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Are you a movie buff? , Are you sports enthusiast? , Do you think you have a strong general knowledge and intelligent enough to answer correctly? .If yes, participate and become a Quiz Monster!! Show us your intelligence and enthusiasm, as this quiz will have a pool of questions on different fields.</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="p2" role="tabpanel" aria-labelledby="p2-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants: 2 participants per team</li>
                        <li>Rounds :3 rounds.</li>
                        <li>Venue: Class room</li>
                        <li>Prize: Attractive cash prize </li>
                        <li>Contacts: Sai Kiran (7795573402)</li>
                        <li> Sunil V (8970630759)</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
         <div id="section6" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">BRIDGE IT</h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/bridge.png);" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="h3-tab" data-toggle="tab" href="#h3" role="tab" aria-controls="h3" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="p3-tab" data-toggle="tab" href="#p3" role="tab" aria-controls="p3" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="h3" role="tabpanel" aria-labelledby="h3-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Loads and the effect of subjected loads on structures are some of the main concepts in civil engineering. In this competitive event we test the ability of the participants to build a structurally sound bridge capable of bearing the imposed loads with provided materials.</li>
                        <li>Ice cream sticks, cutter and fevicol to be given on spot.</li>
                        <li>Criteria’s will be informed 2-3 days prior to the event.</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="p3" role="tabpanel" aria-labelledby="p3-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants: 3 participants per team</li>
                        <li> Rounds : 1 round (1 hour) </li>
                        <li>Venue: Civil drawing hall</li>
                        <li>Prize: Attractive cash prize </li>
                        <li>Contacts: Sai Kiran B A (7795573402)</li>
                        <li> Vineeth T (9738321393)</li>
                        <li>Keerthana S (9945833311)</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
         <div id="section7" class="expanding-container">
            <article class="hentry">
               <h1 class="entry-title">CADD MANE </h1>
               <div class="entry-image">
                  <div style="background-image: url(images/civil/caddmane.png);" class="img-placeholder">1</div>
               </div>
               <br>
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link active" id="h4-tab" data-toggle="tab" href="#h4" role="tab" aria-controls="h4" aria-selected="true">Rules</a>
                  </li>
                  <li class="nav-item">
                     <a style="color:white;" class="nav-link" id="p4-tab" data-toggle="tab" href="#p4" role="tab" aria-controls="p4" aria-selected="false">Details</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="h4" role="tabpanel" aria-labelledby="h4-tab">
                     <p>
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>A platform where you should build up, a dream house within the constraints, shortcuts and speed of the mouse is the key to win, and a little use of brains.</li>
                        <li>Rules and regulations to be given on spot.</li>
                     </ul>
                     </p>
                  </div>
                  <div class="tab-pane fade" id="p4" role="tabpanel" aria-labelledby="p4-tab">
                     <ul style="margin-top: 15px;list-style-type: circle;">
                        <li>Number of participants : 1 participant</li>
                        <li>Rounds : 2 rounds </li>
                        <li>Venue: Civil Cadd lab</li>
                        <li>Prize: Attractive cash prize </li>
                        <li>Contacts: Rohit sihmar  (7795573402)</li>
                        <li> Aniraa sharmin (9108147713)</li>
                     </ul>
                  </div>
               </div>
               <button type="submit" style="width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;" class="btn btn-default "><a style="color:white;" href="comingsoon.php"> REGISTER</a></button>
            </article>
         </div>
      </div>
      <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>
      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script >
         /**
         * jQuery Expanding Grid plugin.
         *
         * By Dan Boulet - https://danboulet.com
         */
         (function ($, window, document) {
         
         // Enable strict mode
         "use strict";
         
         /**
         * Return the last element in the current row of a grid layout.
         */
         var getLastSiblingInRow = function (element) {
         var candidate = element,
         elementTop = element.offsetTop;
         
         // Loop through the element’s next siblings and look for the first one which
         // is positioned further down the page.
         while (candidate.nextElementSibling !== null) {
         if (candidate.nextElementSibling.offsetTop > elementTop) {
         return candidate;
         }
         candidate = candidate.nextElementSibling;
         }
         return candidate;
         };
         
         /**
         * Calculate the distance that we need to scroll the page to bring a
         * section, defined as the area between the top and bottom, into view.
         */
         var calculatePageScrollDistance = function (top, bottom) {
         var windowScrollDistance = $(window).scrollTop(),
         windowHeight = $(window).height(),
         scrollDistanceToTop,
         scrollDistanceToBottom;
         
         // Scroll to the top of the section if the we are already scrolled past it.
         if (windowScrollDistance >= top) {
         return top - windowScrollDistance;
         }
         // Do nothing if there is enough space to show the section without having to scroll.
         else if ((windowScrollDistance + windowHeight) >= bottom) {
         return 0;
         }
         else {
         // Find the maximum distance we can scroll without passing the top of the section.
         scrollDistanceToTop = top - windowScrollDistance;
         // Find the distance we need to scroll to reveal the entire section.
         scrollDistanceToBottom = bottom - (windowScrollDistance + windowHeight);
         
         return Math.min(scrollDistanceToTop, scrollDistanceToBottom);
         }
         };
         
         /**
         * Create the expanding preview grid.
         */
         var expandingGrid = function (context, options) {
         var defaults = {
         animationDuration: 250,
         linksSelector: '.links a',
         expandingAreaSelector: '.expanding-container',
         closeButtonMarkup: '<a href="#" class="close-button">Close</a>',
         spacerMarkup: '<span class="spacer" aria-hidden="true"/>',
         elementActiveClass: 'active',
         elementExpandedClass: 'expanded',
         onExpandBefore: false,
         onExpandAfter: false
         };
         
         var settings = $.extend({}, defaults, options);
         
         var isExpanded = false;
         var activeLink = false;
         var activeExpandedArea = false;
         var activeExpandedAreaTop = false;
         var activeExpandedAreaHeight = false;
         var lastItemInActiveRow = false;
         var activeRowChanged = false;
         var checkExpandedAreaResize = false;
         var $links = $(settings.linksSelector, context);
         var $expandingAreas = $(settings.expandingAreaSelector, context);
         var $closeButton = $(settings.closeButtonMarkup);
         var $spacer = $(settings.spacerMarkup);
         var $secondarySpacer = $spacer.clone();
         
         /**
         * Scroll a section of the page into view, using animation.
         */
         var scrollSectionIntoView = function (top, bottom, duration, callback) {
         var animate;
         var scroll = 0;
         var distance = calculatePageScrollDistance(top, bottom);
         var windowScrollDistance = $(window).scrollTop();
         var timeLeft;
         
         // Set default duration.
         duration = (typeof duration === 'undefined') ? settings.animationDuration : duration;
         timeLeft = duration;
         
         var start = new Date().getTime();
         var last = start;
         var tick = function() {
         timeLeft = Math.max(duration - (new Date() - start), 0);
         
         var x = (timeLeft === 0 || distance === 0) ? 0 : ((new Date() - last) / timeLeft * distance);
         var diff = (distance > 0 ? Math.min(x, distance) : Math.max(x, distance));
         distance = distance - diff;
         scroll += diff;
         window.scrollTo(0, windowScrollDistance + scroll);
         
         last = new Date().getTime();
         
         if (last - start <= duration) {
         animate = (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
         }
         else {
         if (typeof callback === 'function') {
         callback();
         }
         }
         };
         
         tick();
         };
         
         // Process the links.
         $links.each(function () {
         var $this = $(this);
         var targetId = $this.attr('href').match(/#([^\?]+)/)[1];
         var target = document.getElementById(targetId);
         
         if (target) {
         $this.click(function (event) {
         var clickedLink = this;
         var scrollTargetOffset;
         var closeButtonAnimationDelay;
         
         event.preventDefault();
         
         // Is this link already expanded?
         if (isExpanded && activeLink === clickedLink) {
         // Close it.
         $closeButton.click();
         }
         // Otherwise, expand it.
         else {
         $links.removeClass(settings.elementActiveClass).filter($this).addClass(settings.elementActiveClass).parent('li').each(function () {
         var lastSibling = getLastSiblingInRow(this);
         activeRowChanged = lastSibling !== lastItemInActiveRow;
         if (activeRowChanged) {
         	lastItemInActiveRow = lastSibling;
         }
         // If we are changing rows, replace spacer with secondary spacer.
         if (isExpanded && activeRowChanged) {
         	$secondarySpacer.height($spacer.height());
         	$spacer.height(0).replaceWith($secondarySpacer);
         }
         $(lastItemInActiveRow).after($spacer);
         });
         if (isExpanded && activeRowChanged) {
         $secondarySpacer.animate({height: 0}, settings.animationDuration, function () {
         	$(this).detach();
         });
         $closeButton.removeClass(settings.elementActiveClass).hide();
         }
         scrollTargetOffset = ($secondarySpacer.position().top < $spacer.position().top ? $secondarySpacer.height() : 0);
         activeExpandedAreaTop = ($spacer.position().top - scrollTargetOffset);
         $expandingAreas.removeClass(settings.elementExpandedClass).hide().filter(target).each(function () {
         	var $this = $(this);
         	var autoHeight = $this.height();
         	var autoOuterHeight = $this.outerHeight();
         	var initialHeight = (isExpanded && activeExpandedAreaHeight && (activeRowChanged === false)) ? activeExpandedAreaHeight : 0;
         
         	stopExpandedAreaMonitor();
         
         	$spacer.animate({height: autoHeight + 'px'}, settings.animationDuration);
         
         	$this.css({
         		height: initialHeight + 'px',
         		position: 'absolute',
         		left: 0,
         		top: $spacer.position().top + 'px'
         	}).show(0, function () {
         		// Callback.
         		if (typeof settings.onExpandBefore === 'function') {
         			settings.onExpandBefore.call(this);
         		}
         	}).animate({
         		height: autoHeight + 'px',
         		top: activeExpandedAreaTop + 'px'
         	}, settings.animationDuration, function () {
         		$this.css({height: 'auto'}).addClass(settings.elementExpandedClass);
         
         		// Set a timer to monitor changes to expanded area’s height.
         		activeExpandedAreaHeight = $this.height();
         		checkExpandedAreaResize = setInterval(function () {
         			var activeExpandedAreaNewHeight = $this.height();
         			if (activeExpandedAreaNewHeight !== activeExpandedAreaHeight) {
         				activeExpandedAreaHeight = activeExpandedAreaNewHeight;
         				syncExpandedAreaWithSpacer();
         			}
         		}, 1000);
         
         		// Callback.
         		if (typeof settings.onExpandAfter === 'function') {
         			settings.onExpandAfter.call(this);
         		}
         	});
         
         	// Scroll the page to bring the active link and preview into view.
         	var scrollTargetTop = $(clickedLink).offset().top - scrollTargetOffset;
         	var scrollTargetBottom = $this.offset().top + autoOuterHeight + 20 - scrollTargetOffset;
         	scrollSectionIntoView(scrollTargetTop, scrollTargetBottom);
         });
         
         // Activate close button.
         closeButtonAnimationDelay = (isExpanded && activeRowChanged && ($this.parent().index() > $(activeLink).parent().index())) ? settings.animationDuration : (settings.animationDuration / 4);
         $closeButton.css({
         	position: 'absolute',
         	right: 0,
         	top: activeExpandedAreaTop + 'px'
         }).delay(closeButtonAnimationDelay).fadeIn(settings.animationDuration, function () {
         	$(this).addClass(settings.elementActiveClass);
         });
         
         // Set global variables.
         activeLink = this;
         activeExpandedArea = target;
         isExpanded = true;
         }
         });
         }
         });
         
         // Process the close button.
         $closeButton.appendTo(context).hide().click(function (event) {
         var $activeLink = $(activeLink);
         var activeLinkTopOffset = $activeLink.offset().top;
         var activeLinkBottomOffset = activeLinkTopOffset + $activeLink.outerHeight();
         
         event.preventDefault();
         
         // DOM manipulation and animations.
         $links.removeClass(settings.elementActiveClass);
         $expandingAreas.slideUp(settings.animationDuration).removeClass(settings.elementExpandedClass);
         $closeButton.removeClass('active').hide();
         $spacer.animate({height: 0}, settings.animationDuration, function () {
         $spacer.detach();
         });
         
         // Scroll the page to bring the active link into view.
         scrollSectionIntoView(activeLinkTopOffset, activeLinkBottomOffset);
         
         stopExpandedAreaMonitor();
         
         // Reset global variables.
         isExpanded = false;
         activeLink = false;
         activeExpandedArea = false;
         });
         
         /**
         * Stop monitoring size of expanded area.
         */
         var stopExpandedAreaMonitor = function () {
         if (checkExpandedAreaResize) {
         clearInterval(checkExpandedAreaResize);
         }
         };
         
         /**
         * Match preview and spacer in height and position.
         */
         var syncExpandedAreaWithSpacer = function () {
         if (activeExpandedArea && isExpanded) {
         $spacer.height($(activeExpandedArea).height());
         activeExpandedAreaTop = $spacer.position().top;
         $closeButton.add(activeExpandedArea).css({top: activeExpandedAreaTop + 'px'});
         }
         };
         
         /**
         * Place spacer in proper position within grid.
         */
         var positionSpacer = function () {
         var lastSibling;
         if (activeLink && lastItemInActiveRow && isExpanded) {
         // Remove spacer.
         $spacer.detach();
         lastSibling = getLastSiblingInRow($(activeLink).parent()[0]);
         // Reposition spacer, if necessary.
         if (lastItemInActiveRow !== lastSibling) {
         console.log(lastSibling);
         lastItemInActiveRow = lastSibling;
         }
         // Restore spacer.
         $(lastItemInActiveRow).after($spacer);
         }
         };
         
         // React to window resize.
         $(window).resize(function () {
         if (isExpanded) {
         positionSpacer();
         syncExpandedAreaWithSpacer();
         }
         });
         };
         
         // Create the jQuery plugin.
         $.fn.expandingGrid = function (options) {
         return this.each(function () {
         expandingGrid(this, options);
         });
         };
         
         })(jQuery, window, document);
         
         $(document).ready(function () {
         $('.expanding-grid').expandingGrid();
         });
         //# sourceURL=pen.js
      </script>
      <?php include('footer.php') ; ?>
   </body>
</html>