
<script src = "https://cdnjs.cloudflare.com/ajax/libs/processing.js/1.6.6/processing.js"></script>
<script>
int idleClickerFrames = 20;
int idleClickerMoney = 10;
int idleClickerUpgrade;
let missionsUp2;
let shopUp1;
let shopUp2;
let uBG;
int score = 0;
bool arcadeOpen = false;
int lives = 5;
boolean bShopUp2 = false;
boolean bShopUp1 = false;
boolean bMissionsUp2 = false;
int missionItem = int(random(1,2));
int missionPrice = int(random(0,100));
int missionProgress = 0;
 int frames= 0;
int currentCharacter;
boolean mUpgrade1 = false;
boolean bgUpdated = false;
string missionItemS;
int clickerPrice = 1000;
 int cols;
 int rows;
  PImage backgroundimage;
  SoundFile file;
  //put your audio file name here
String[] variableLoads = new String[5];
int moneyWorth = 50;
  //runs once when the app first starts

  //runs all the time, this is the main app loop
boolean idleClicker1 = false;
float cUpPrice = 10;
boolean shopOpen = false;

int money = 500;
boolean nameCorrect;
String name = " ";
objects[] obs;
int count = 6;
let missionsOUp1;
evilCoins[] ecs;
void setup(){
	missionsUp2 = loadImage('missionsUp2.png');
	missionsOUp1 = loadImage("openMissions.svg");
    fullScreen();
shopUp1 = loadImage('shopUp1.svg');
if(missionItem == 1){
	
missionItemS = "Coins"	;
	
	
} else if(missionItem == 2){

missionItemS = "Red Coins";	
	
}
      int eccount = 7;
  backgroundimage = loadImage("background.png");
  cols = width/backgroundimage.width;
  rows = height/backgroundimage.height;
  if( backgroundimage.width%width > 0){cols++;}
  if( backgroundimage.height%height > 0){rows++;}
  println(cols);


  background(0);
  textSize(70);
  textAlign(CENTER);
  frameRate(30);
  obs = new objects[count];
int objectNumber = 0;
ecs = new evilCoins[eccount];
  int index = 0;
  int ecsIndex = 0;
  while(objectNumber<=5){
   obs[index++] = new objects(random(0,width),random(0,height),2);
    objectNumber ++;}


int evilCoinNumber = 0;
for(int evilCoinsNum = 0;evilCoinsNum <=6;evilCoinsNum++){
  ecs[ecsIndex++] = new evilCoins( random(0,width),random(0,height),2);

}
variableLoads = loadStrings("variables.txt");
    money = int(variableLoads[2]);
    name = variableLoads[0];
    nameCorrect =boolean(variableLoads[1]);
idleClicker1 = boolean(variableLoads[3]);
welcomeRead = boolean(variableLoads[4]);
file = new Audio("primaryFocus.wav");
file.play();
uBG = loadImage("jeremy-thomas-98201-unsplash.jpg");
	
}

 boolean welcomeRead;
 





 


void keyPressed(){
  if(nameCorrect!=true){
    
          if(key != BACKSPACE && key!= ENTER && key != DELETE){


						if(key == 'a'){
				
						name +='a​'								
						}
							if(key=='b'){
							name +='b​'	
								
							}
								 	if(key=='c'){
							name +='c​'	
								
							}
										 	if(key=='d'){
							name +='d​'	
								
							}
												 	if(key=='e'){
							name +='e​'	
								
							}
														 	if(key=='f'){
							name +='f​'	
								
							}
																 	if(key=='g'){
							name +='g​'	
								
							}
																		 	if(key=='h'){
							name +='h​'	
								
							}
																				 	if(key=='i'){
							name +='i​'	
								
							}
																						 	if(key=='j'){
							name +='j​'	
								
							}
																								 	if(key=='k'){
							name +='k​'	
								
							}
																										 	if(key=='l'){
							name +='l​'	
								
							}
																												 	if(key=='m'){
							name +='m​'	
								
							}
																														 	if(key=='n'){
							name +='n​'	
								
							}
																																 	if(key=='o'){
							name +='o​'	
								
							}
																																			if(key=='p'){
							name +='p​'	
								
							}
																																				 	if(key=='q'){
							name +='q​'	
								
							}
																																						 	if(key=='r'){
							name +='r​'	
								
							}
																																								 	if(key=='s'){
							name +='s​'	
								
							}
																																										 	if(key=='t'){
							name +='t​'	
								
							}
																																												 	if(key=='u'){
							name +='u​'	
								
							}
																																														 	if(key=='v'){
							name +='v​'	
								
							}
																																																 	if(key=='w'){
							name +='w​'	
								
							}
																																																	 	if(key=='x'){
							name +='x​'	
								
							}
																																																				 	if(key=='y'){
							name +='y​'	
								
							}
																																																						 	if(key=='z'){
							name +='z​'	
								
							}
																																																								 	if(key=='A'){
							name +='A​'	
								
							}
																																																										 	if(key=='B'){
							name +='B​'	
								
							}
																																																												 	if(key=='C'){
							name +='C​'	
								
							}
																																																														 	if(key=='D'){
							name +='D​'	
								
							}
																																																																 	if(key=='E'){
							name +='E​'	
								
							}
																																																																		 	if(key=='F'){
							name +='F​'	
								
							}
																																																																				 	if(key=='G'){
							name +='G​'	
								
							}
																																																																						 	if(key=='H'){
							name +='H​'	
								
							}
																																																																								 	if(key=='I'){
							name +='I​'	
								
							}
																																																																										 	if(key=='J'){
							name +='J​'	
								
							}
								if(key=='K'){
							name +='K​'	
								
							}
									 	if(key=='L'){
							name +='L​'	
								
							}
											 	if(key=='M'){
							name +='M​'	
								
							}
													 	if(key=='N'){
							name +='N​'	
								
							}
															 	if(key=='O'){
							name +='O​'	
								
							}
																	 	if(key=='P'){
							name +='P​'	
								
							}
																			 	if(key=='Q'){
							name +='Q​'	
								
							}
																					 	if(key=='R'){
							name +='R​'	
								
							}
																							 	if(key=='S'){
							name +='S​'	
								
							}
																									 	if(key=='T'){
							name +='T​'
								
							}
																											 	if(key=='U'){
							name +='U​'	
								
							}
																													 	if(key=='V'){
							name +='V​'	
								
							}
																															 	if(key=='W'){
							name +='W​'	
								
							}
																																	 	if(key=='X'){
							name +='X​'	
								
							}
																																			 	if(key=='Y'){
							name +='Y​'	
								
							}
							if(key=='Z'){
							name +='Z​'	
								
							}
						
      }
 if(key == ENTER){
  nameCorrect = true; 
   
   
   
 }
		if(key == CODED) {
 if(keyCode== LEFT ){if(name.length() >=2){

  name = name.substring(0,name.length()-2);
 }}
 }}
    if(nameCorrect == true){
     if(welcomeRead != true){
     if(keyCode == RIGHT)
     welcomeRead = true;
     
     }
       
     }
     
     if(shopOpen == true || missionsOpen == true){
      if(key == BACKSPACE); 
       shopOpen = false;
			 missionsOpen = false;
     }
      
    }
    
float playerX = width/2;
float playerY = height/2;


boolean missionsOpen = false;
void draw(){
	if(arcadeOpen == true){
		background(0);
		rect(mouseX,mouseY,20,20);
		background(0);
		
		
		
	






				 
				 
image(uBG,0,0);
				 

	
		
		
		
		
		for(objects obj : obs ){
obj.Update();
obj.Display();
  obj.isOOB();
  obj.isColliding();
}
		
		
for(evilCoins evi : ecs){
  
 evi.update();
 evi.Display();
 
 evi.isOOB();
 evi.isColliding();
  
}
		
		rect(mouseX,mouseY,20,20);
		
		text('lives: ' + lives + '',300,100);
		text('score: ' + score + '',700,100);
		
		
		
		
		
		
		
	}
	if(arcadeOpen == false){
	if(shopOpen == true){
		
	cursor(HAND);	
		
	} else{
	noCursor();	
		
	}
if(welcomeRead == true){
	

}

		
		

 background(0);
	
 for (int y=0; y<1; y++){
    for (int x=0; x< 1; x++){
  if(bgUpdated == false){
			image(backgroundimage,x*backgroundimage.width,y*backgroundimage.height);
	}
if(bgUpdated == true){
				 
				 
image(uBG,x*uBG.width,y*uBG.height)
				 
				 }
	
		
		}}
  if(idleClicker1 == true){
 if(frames % idleClickerFrames == 0){
   
  money+=idleClickerMoney; 
 }
  
  } 
  frames++;
  
  String welcomeReadS = str(welcomeRead);
  String moneySave = str(money);
String nameSave = str(nameCorrect);
String Click1Save = str(idleClicker1);
 String[] variables = {name,nameSave,moneySave,Click1Save,welcomeReadS};
 saveStrings("variables.txt",variables);

  
  
  

  if( nameCorrect != true){

    text("What is your name?(left for delete)", width/2,height/4);
    
   text(name,width/2,height/2);

        }
    if(nameCorrect == true){
     if(welcomeRead == false){
       
      text("welcome " + name + "! Press '->' to begin!",width/2,height/2);
      text("to continue, press  ''->''",height-300,width-590); 
      
     }
      
    }
    if(welcomeRead == true){ if(bMissionsUp2 == true){
		missionsOUp1 = false;	if(missionsOpen == false){
			image(missionsUp2,width-500,0);
		}
		}
			if(missionsOpen == false && shopOpen == false){
				
				

				fill(255);
				textSize(30);
			text('Open Arcade Mode', width-50, height - 20);
				textSize(70);
				fill(0);
				if(mUpgrade1 == true){
				image(missionsOUp1,width-500,-150,500,400);
			} if(mUpgrade1==false){
				fill(0)
				
rect(width-500,0,500,100);	
	fill(255)
				textAlign(LEFT);
				text("Open Missions",width-500,100);
textAlign(RIGHT);
			}}
							
	if(missionsOpen == true){ 
		textSize(30);
		textAlign(CENTER);
	text("You need to collect a total of " + missionPrice + " " + missionItemS + ". You have collected " + missionProgress + " so far" , width/2,height/2);	
		textSize(70);
		textAlign(RIGHT);
		
		
	}
  if(shopOpen == false){    playerX =mouseX;
												playerY = mouseY;
     rect(playerX,playerY, 20,20); 
     if(bShopUp1  == false){ 
    fill(0);
    stroke(255);
     rect(0,height-40,200,40);
     textAlign(RIGHT);
     fill(255);
     textSize(30);
												
													
													
													
												
     text("Open Shop",200,height);
     textSize(70);
     textAlign(CENTER);
     
  }
											 if(bShopUp1 == true && bShopUp2 == false && arcadeOpen == false){
											 image(shopUp1,0,height-40);
											 
											 }}
  if(shopOpen == true){
    textSize(35);
    fill(0);
    stroke(255);
		if(bShopUp1 == false){
		rect(width/2,470,500,70);
			fill(255);
			textAlign(LEFT);
			fill(255)
			text('Upgrade Shop Button:200M',width/2,535);
			textAlign(RIGHT);
			fill(0);

		}
		if(bgUpdated == false){
		rect(width/2,160,500,70);
			fill(255);
			textAlign(LEFT);
			text("Upgrade BG for 2000 money!",width/2,160+70)
			fill(0);
			textAlign(RIGHT);
			
		}
		if(mUpgrade1 == false && arcadeOpen== false){
		rect(width/2,300,500,70);
			textAlign(LEFT);
			fill(255);
			text("Upgrade Mission Button:200M",width/2,335);
			textAlign(RIGHT);
			fill(0);
			
		}
		if(bMissionsUp2 == false && mUpgrade1 == true && arcadeOpen == false){
		rect(width/2,370,500,70);
			fill(255);
			textAlign(LEFT);
			text("Upgrade Mission Button:2000M",width/2,405)
			textAlign(RIGHT);
			fill(0);
			
		}
   if(1 == 1){
    rect(width/2,20,500,70);
    textAlign(LEFT);
fill(255);
    
   text("Buy Idle Catcher Number 1"  , width/2,50);
text("for" +clickerPrice+" money" , width/2,70);
textSize(70);
   }
		
   if(idleClicker1==true){
    textSize(35);
		 fill(0);
     rect(width/2,90,500,70);
     fill(255);
     textAlign(LEFT);
     text("Upgrade coins! " + cUpPrice + " money.", width/2,120);
     textSize(70);
     textAlign(RIGHT);

   }
}
  
if(missionProgress >= missionPrice){
			
			int missionItem = int(random(1,2));
 missionPrice = int(random(0,100));
 missionProgress = 0;
			if(missionItem == 1){
	
missionItemS = "Coins"	;
	
	
} else{

missionItemS = "Red Coins";	
	
}
			money +=100000
			alert("you have completed a mission; +100000 money!")
			
		}
for(objects obj : obs ){
obj.Update();
obj.Display();
  obj.isOOB();
  obj.isColliding();
}
for(evilCoins evi : ecs){
  
 evi.update();
 evi.Display();
 
 evi.isOOB();
 evi.isColliding();
  
}
														textAlign(LEFT);
text("Money:" + money + "",180,50);
        textAlign(RIGHT);
      }
     


}}
  
 void mouseClicked(){
	 if(mouseX>=width-300){
if(mouseY>=height-50){
	 arcadeOpen = true;
	alert('Welcome to arcade mode, you have five lives, everytime you touch a red coin you lose a life, once you lose five lives you are dead and get sent back to the main game. You CANNOT leave arcade mode until you DIE');
	 

		 }
			 
		 }
	 if(mouseX >=width-500 && mouseY<=100 && shopOpen == false){
		missionsOpen = true; 
		 
		 
	 }
   if((mouseX - 200) * (mouseX) <= 0 ){
    if((mouseY - height) *(mouseY) <= 0) {
     shopOpen = true; 
      
    }
     
   }
   if(shopOpen == true){
		 
		 if((mouseX-width/2)*(mouseX-(width/2+500))<=0){
		if((mouseY-470)*(mouseY-540)<=0){
		if(money>=200&& bShopUp1 == false){
			money-=200;
			bShopUp1 = true;
			shopOpen = false;
			
		}
			
			
		}
			 
			 if((mouseY-160)*(mouseY-(160+70))<=0){
				if(money>=2000){
			bgUpdated = true;

				money-=2000;
				}
			}
			 
			 
			 
		 }

		 
   if((mouseX - width/2)*(mouseX-(width/2+500))<=0 && arcadeOpen == false){
     
    if((mouseY - 80)*(mouseY) <=0){
      if(money>=clickerPrice){
     money -= clickerPrice;
     idleClicker1  = true;
     shopOpen = false;
clickerPrice *=2;
 idleClickerUpgrade +=1;
				if(idleClickerUpgrade <=14){
				idleClickerFrames -=1;	
					
				}
				if(idleClickerUpgrade>=15){
				idleClickerMoney*=2	
					
				}
    }
    else{
     text("you dont have the money for that",width/2,height/2) ;
      delay(120);
      
    }
   }
     
   }
    
   if((mouseX - width/2)*(mouseX-(width/2+500))<=0){
		 if((mouseY-440)*(mouseY-510)<=0){
			 if(money>=2000){
				 
				 
			 }
			 
			 
		 }
   if((mouseY-370)*(mouseY-440)<=0){if(money>=2000){
		bMissionsUp2 = true;
	 money-=2000;
	 }
	 }
		 if((mouseY - 300)*(mouseY - 370 )<=0){
			if(money>=200){mUpgrade1 = true;
			 money -=200;
			 shopOpen =false;
		 }}
    if((mouseY - 90)*(mouseY-160) <=0){
      if(money>=cUpPrice){
     money -= cUpPrice;
   moneyWorth *=3;
     shopOpen = false;
     cUpPrice *=3;
    }
    else{
     text("you dont have the money for that",width/2,height/2) ;
      delay(120);
      
    }
   }
     
   }

 }}
class objects{
    float objectSpeed = 2;
 float xPos;
 float yPos;
 objects(float tempxPos,float tempyPos, int tempSpeed){
   xPos = tempxPos;
   yPos = tempyPos;
   objectSpeed = tempSpeed;
   
   
 }
 void Update(){
   yPos = yPos+objectSpeed;
   
   
 }
 void Display(){
 fill(255,204,0);
ellipse(xPos,yPos,20,20);
   fill(255);
 }
 void isOOB(){
  // Stands for is Out Of Bounds
  if(yPos>=height){
   yPos=0;
   xPos = random(0,width);
    
  }
 }
   void isColliding(){
     
    if(dist(xPos,yPos,mouseX,mouseY)<=20){
      money +=moneyWorth;
      yPos =0;
      xPos = random(0,width);
			if(missionItem == 1){
			missionProgress +=1;	
				
				
			}
      if(arcadeOpen == true){
			score+=100;	
			if(score%100000 == 0){
			lives+=1;	
				alert('You have gotten 100000 points, as a reward you get an extra life');
			}
			
			}
			
    }
      
      
    }
 }
 class evilCoins{
    float objectSpeed = 2;
 float xPos;
 float yPos;
 evilCoins(float tempxPos,float tempyPos, int tempSpeed){
   xPos = tempxPos;
   yPos = tempyPos;
   objectSpeed = tempSpeed;
   
   
 }
 void update(){
   yPos = yPos+objectSpeed;
   
   
 }
 void Display(){
 fill(254,0,0);
ellipse(xPos,yPos,20,20);
   fill(255);
 }
 void isOOB(){
  // Stands for is Out Of Bounds
  if(yPos>=height){
   yPos=0;
   xPos = random(0,width);

  }
 }
   void isColliding(){
     
    if(dist(xPos,yPos,mouseX,mouseY)<=20){
     if(money>=30){
      money -=30;
     }
      yPos =0;
      xPos = random(0,width);
      if(missionItem == 2){
			missionProgress +=1;	
				
			}
			if(arcadeOpen == true){
			lives-=1;	
				if(lives == 1){
				alert('game over')
					score = 0
					lives = 5
					arcadeOpen = false;
					
				}
				
				
			}
    }
      
      
    }
 }
</script>
