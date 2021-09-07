
<style>
	*{
			box-sizing: border-box;
		}
	body {
	  margin: 0;
	  /*padding:0;*/
	  font-family: Arial, Helvetica, sans-serif;
	}
	
div#nav{
	background-image:url(<?php echo get_header_image() ?>);
}
	.wrapper{
		margin-top:340px;
	}
/*title logo nav*/
	.title-section{
		width: 20%;
	}
	.logo-section{
		 width:20%; 
		 /*background-color: #123;*/
		 padding-top: 0;
	}
	.nav-section{
		width:40%;
		text-transform: uppercase;
	}
	.title-section,
	.logo-section,
	.nav-section{
		float:left;
		height: 150px;
		overflow: hidden;
	}
	.title-section,
	.site-description{
		padding:10px;
	}

 

	/*Stick Navbar*/
#nav-menu{
	text-align: right;
}

#nav {
	overflow: hidden;
	position: fixed;
	width: 100%;
	background-color: #9e9e9e;
	padding:100px 20px;
	z-index: 99;
	top:0;
	transition: 0.4s;

}
#nav ul{

	list-style-type: none;
  margin: 0;
  padding: 0;

}
#nav ul li{
	display: inline;
}
#nav ul li a{
	/*float: right;*/
	text-align: center;
	text-transform: uppercase;

}
#nav a{
	text-align: center;
	text-decoration: none;
	padding:15px ;
	font-size: 18px;
	line-height: 25px;
  border-radius: 4px
  

}

#nav #twisty-title{
	font-size: 55px;
  font-weight: bold;
}
#nav #twisty-description
{
  font-size: 30px;
  font-weight: bold;
  
}
#nav #twisty-title,
#nav #twisty-description{
	text-transform: uppercase;
	transition: 0.4s;
}
#nav a:hover {
  background-color: #ccc;
  color: black;
}
#nav a.active {
  background-color: dodgerblue;
  color: white;
}

/*site identity*/
.site-title,
.site-description,
.logo-detail{
	/*display: inline;*/
	padding: 15px;
}

/*Home case*/
	.homecase {
	margin-right: auto;
  margin-left: auto;
  color:#fff;
  animation-duration: 2s;
	width: 100%;
	text-align: center;

	height: <?php echo esc_attr(get_theme_mod('homecase_height', 700)); ?>px;
	
	background:url(<?php echo esc_attr(get_theme_mod('homecase_image', get_template_directory_uri().'/imgs/homecase.jpg')); ?>);
}
.homecase a.btn{
  margin-right:20px;
}
	.homecase-content{
  position: relative;
  width:50%;
  margin:auto;
  top:30%;

}



	/*
	.float-left{
		float: left;
	}
	.float-right{
		float:right;
	}
	*/

	/*layout CSS*/
	.container{
		
		background-color: #ddd;
		padding: 50px;
		
	}
	

	.clearfix:after,
	.row:after{
		display: table;
		clear: both;
		content: "";
		
	}

		.column-content{
			width:60%;
			padding:20px;
		}
		
		.column-img,
		.column-sidebar{
			width:40%;
			padding:20px;
		}
		.column-img{
			padding:auto;
		}
		.column-one{
			width:100%;
			text-align: center;
		}
		.column-two{
			width:50%;
			
		}
		.column-four{
			padding: 0;
			width: 25%;
			float: left;
		}
		.column-66{
			width: 66%;
			float: left;

		}
		.column-34{
			width: 34%;
			float: left;
		}
		/*sitcky */
		.sticky {
			background: #000 !important;
			color: #fff !important;
		}
		/*Text Alignment */
		.aligncenter,
		.text-center{
			text-align: center;
		}

	/*Font size*/
	.xlarge-font {
	  font-size: 64px
	}
	.large-font {
	  font-size: 48px;
	}
	
	
	.upper-case{
		text-transform: uppercase;
	}
	.heading h1{

	}
	.desc p{
		font-size:18px;
  font-weight:400;

	}
	/*image */
	.post-thumbnail img{
	  width:100%;
	  height:auto;
	  margin-bottom:50px;
	  padding: 5%;
	}
	img{
		height: auto;
		max-width: 100%;
		display: block;
		margin-left: auto;
  	margin-right: auto;
  }
  .borders{
  	border-radius: <?php echo esc_attr(get_theme_mod('images', 50)); ?>%;
  }
/*Banner*/
.banner {
	text-align: center;
    padding: 100px 0;
    color: #f8f8f8;
    background:url(<?php echo esc_attr(get_theme_mod('footer_banner', get_template_directory_uri().'/imgs/footer_banner.jpg')); ?>) no-repeat center center;
    background-size: cover;
}

.banner h2 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
    font-size: 3em;
}

.banner-social-buttons {
    float: right;
    margin-top: 0;
}
/*team*/
.team{
	padding: 0;
	margin: 0;

}
/*Flip cards*/
.flip-outer{
	padding: 0;
	width: 25%;
	float: left;
}
.flip-box,
.flip-box-inner,
.flip-box-front,
.flip-box-front img, 
.flip-box-back{
	border-radius: 50px;
}
.flip-box {
	
	margin:20px;
  background-color: #9e9e9e;
  width: 250px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}
.flip-box-inner {
  position: relative;
  background-color: #9e9e9e;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}
.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.flip-box-front {
  background-color: #9e9e9e;
  color: black;
}
.flip-box-back {
  background-color: #9e9e9e;
  color: white;
  transform: rotateX(180deg);
}
.flip-box-front img{
	width:300px;
	height:200px
}
/*Odd Even Post Background - Color*/
.odd-bg-color{
	background-color: #fff;
	/*background-color: #00d;*/
}
.even-bg-color{
	/*background-color: #ffe;*/
}
/*CAT TAGS DATE*/
.entry-heading a{
		text-transform: uppercase;
		font-size: 48px;
		transition: padding-left 2s;
	}

.entry-heading a:hover{
		text-decoration: none;
		/*background-color: orange;*/
		/*font-size: 48px;*/
		padding-left: 10px;
	}

.entry-meta{
	padding: 0;
	margin:0;
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	text-align: center;
	text-transform: uppercase;
	
}
.entry-meta li{
	display: inline-block;
	font-size: 13px;
	padding: 0 8px;
	position: relative;
	z-index: 0;
}

.entry-meta li a,
.entry-meta a{
     color: #000;

}
.entry-meta li:not(:first-child):after{
	border-left: 1px solid #000;
	height: 10px;
	position: absolute;
	top: 5px;
	left: 0;
	content: '';
}
	
	.entry-excerpt  {
		font-size:18px;
  	font-weight:400;
  	padding: 40px;
  	

 	}
.author-time-date a{
      color: #292b2c;
      color:#292b2c!important;
       }
.author-time-date a:hover{
      color: #000;
      color:#101112!important;

    }
/*pagination*/
.pagination {
	border: 1px solid #ccc;
  display: inline-block;
  
}
.nav-previous{
	float: right;
	
	padding-left: 30px;
}
.nav-next{
	float: left;
	padding-right: 30px;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

/*comments*/
.comments{
		margin-top:10px;
		margin-bottom:20px;
		padding:10px;
    border:1px #ccc solid;
    
}
.comments-title{
  background:#f4f4f4;
  color:#333;
  padding:5px;

}
.comment-body{
  padding:20px 10px;
  margin-bottom:10px;
  border:#ccc 1px solid;
 }


.comment-meta{
 color:#fff; 
 background:#333;
  overflow:auto;
  padding:10px;
}

.comment-meta img{
  
  margin-right:10px;
  float:left;
}
.comment-author img{
	margin-right:10px;
	float:left;
  
}

.comment-meta time{
  margin-left:12px;
}

.comment-reply-link{
  background:#333;
  display:inline-block;
  color:#fff;
  padding:10px 15px;
}

.comment-form input,.comment-form textarea{
  border:#ccc 1px solid;
  width:100%;
  padding:5px;
  margin-bottom:20px;
}
/*Sidebar*/
.sidebar{
	border:red 1px solid;
	background:#888;
	padding: 20px;
}

/*Footer*/
.footer{
			background-color:#9e9e9e;
			/*padding:25px; */
		}

/*Responsive Meadia Queries*/
	
	/*@media screen and (max-width: 1300px) {
		
	
		.column-content,
		.column-img{
			width:100%;
			text-align: center;
			
		}
	.title-section,
	.logo-section,
	.h-space,
	.nav-section{
		width: 100%;
	}
	.logo-section{
		padding: 0 25%;
	}

		#nav {
    	padding: 20px 10px !important;
  	}
  	#nav a {
	    float: none;
	    display: block;
	    text-align: left;
	  }
	  .float-right{
	  	float: none;
	  }

	  .flip-outer{
	  	width: 100%;
	  	padding: 0;
			margin: 0 auto;
			float: none;

	  }
}*/
</style>