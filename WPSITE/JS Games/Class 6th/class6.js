	function mensuration()
{
	a=Math.floor(1+(Math.random)*200);
	if(a%2==0)
	{
		side=Math.floor(3+(Math.random)*6);
		switch(side)
		{
			case 3:
				triangle();
				break;
			case 4:
				k=Math.floor(1+(Math.random)*150);
				if(k%2==0)
					square(0);
				else
					rectangle(0);
				break;
			case 5:
				pentagon();
				break;
			case 6:
				hexagon();
				break;
		}
	}
	else
	{
		m=Math.floor(1+(Math.random)*155);
		if(m%2==0)
			square(1);
		else
			rectangle(1);
	}
}
function triangle()
{
	a=Math.floor(1+(Math.random)*10);
	b=Math.floor(1+(Math.random)*a);
	c=Math.floor(1+(Math.random)*(a+b));
	alert(a,b,c);
}
function square(c)
{
	if(c==0)
	{
		
	}
}