var score;
function divisible(a)
{
	var a,b;
	var score1;
	a=Math.floor(1+(Math.random())*100000);
	b=Math.floor(2+(Math.random())*10);
	c = confirm("Is "+a+" is divisible by "+b+"                                                 Turn:"+(i+1));
	d=a%b;
	if((c && d==0) || (!c && d!=0))
		{
			alert("Correct Response");
			score1=score1+4;
		}
	else
		{
			alert("Wrong Response");
			score1=score1-1;
		}
	alert("Your score is "+score1);
		score+=score1;
}
function profitloss()
{
	var cost,sell,gain,loss,score2;
	cost=Math.floor(1+Math.random()*1000);
	sell=Math.floor(1+Math.random()*1000);
	// alert("Cost Price"+cost);
	// alert("Selling Price"+sell);
	if((sell-cost)<0)
	{
		res=prompt("Cost Price of an item is $"+cost+" and Selling Price is $"+sell+".\n Determine the loss % upto 1 decimal places");
		loss=((cost-sell)/cost)*100;
		//alert("Response recorded"+res+"Answer"+loss);
		loss=loss.toPrecision(3);
		if(res==loss)
		{
			alert("Correct Response");
			score2=score2+4;
		}
		else
		{
			alert("Correct Response");
			score2=score2-1;
		}
	
	}
	if((sell-cost)>0)
	{
		res=prompt("Cost Price of an item is $"+cost+" and Selling Price is $"+sell+".\n Determine the gain% upto 1 decimal places");
		gain=((sell-cost)/cost)*100;
		//alert("Response recorded"+res+"Answer"+gain);
		gain=gain.toPrecision(3);
		if(res==gain)
		{
			alert("Correct Response");
			score2=score2+4;
		}
		else
		{
			alert("Wrong Response");
			score2=score2-1;
		}
	
	}
	alert("Your score is "+score2);
		score+=score2;
}
function temperature()
{
	var cel,far,res,score3;
	var ran = Math.floor(1+(Math.random())*100000);
	if(ran%2==0)
	{
		cel=Math.floor(1+(Math.random())*200);
		far=((cel*9)/5)+32;
		far=Math.round(far);
		res=prompt("Temperature in Celcius: "+cel+"Temperature in Farenheit:");
		if(res==far)
			{
			alert("Correct Response");
			score3=score3+4;
			}
		else
			{
			alert("Wrong Response");
			score3=score3-1;
			}
	}
	else
	{
		far=Math.floor(1+(Math.random())*200);
		cel=((far-32)*5)/9;
		cel=Math.round(cel);
		res=prompt("Temperature in Farenheit: "+far+"Temperature in Celcius:");
		if(res==cel)
			{
			alert("Correct Response");
			score3=score3+4;
			}
		else
			{
			alert("Wrong Response");
			score3=score3-1;
			}
	}
	alert("Your score is "+score3);
	score+=score3;
}
function simpleinterest()
{
	var principal,rate,interest,time,res,score4;
	principal=Math.floor(1+(Math.random())*10000);
	rate=(1+(Math.random())*10);
	rate=rate.toPrecision(2);
	time=Math.floor(1+(Math.random())*10);
	interest=(principal*rate*time)/100;
	interest=Math.round(interest);
	res=prompt("Principal Amount is:"+principal+"\n"+"Rate of Interest is:"+rate+" per annum"+"\n"+"Time :"+time+" years"+"\n Simple Interest:(in rounded form)")
	if(res==interest)
		{
			alert("Correct Response");
			score=score+4;
		}
	else
		{
			alert("Correct Response");
			score4=score4-1;
		}
		alert("Your score is "+score4);
			score+=score4;
}