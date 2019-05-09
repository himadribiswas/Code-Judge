#include<stdio.h>
int main()
{
	int m,d,y,s;
	s=0;
	scanf("%d%d%d",&m,&d,&y);
	if(y%4==0||y%400==0)
	{
		if(m==1)
		{
			s=d;
			printf("%d",s);
		}
		else if(m==2)
		{
			s=31+d;
			printf("%d",s);
		}
		else if(m==3)
		{
			s=31+29+d;
			printf("%d",s);
		}
		else if(m==4)
		{
			s=31+29+31+d;
			printf("%d",s);
		}
		else if(m==5)
		{
			s=31+29+31+30+d;
			printf("%d",s);
		}	
		else if(m==6)
		{
			s=31+29+31+30+31+d;
			printf("%d",s);
		}
		else if(m==7)
		{
			s=31+29+31+30+31+30+d;
			printf("%d",s);
		}	
		else if(m==8)
		{
			s=31+29+31+30+31+30+31+d;
			printf("%d",s);
		}
		else if(m==9)
		{
			s=31+29+31+30+31+30+31+31+d;
			printf("%d",s);
		}
		else if(m==10)
		{
			s=31+29+31+30+31+30+31+31+30+d;
			printf("%d",s);
		}
		else if(m==11)
		{
			s=31+29+31+30+31+30+31+31+30+31+d;
			printf("%d",s);
		}
		else if(m==12)
		{
			s=31+29+31+30+31+30+31+31+30+31+30+d;
			printf("%d",s);
		}
	}
	else
	{
		if(m==1)
		{
			s=d;
			printf("%d",s);
		}
		else if(m==2)
		{
			s=31+d;
			printf("%d",s);
		}
		else if(m==3)
		{
			s=31+28+d;
			printf("%d",s);
		}
		else if(m==4)
		{
			s=31+28+31+d;
			printf("%d",s);
		}
		else if(m==5)
		{
			s=31+28+31+30+d;
			printf("%d",s);
		}	
		else if(m==6)
		{
			s=31+28+31+30+31+d;
			printf("%d",s);
		}
		else if(m==7)
		{
			s=31+28+31+30+31+30+d;
			printf("%d",s);
		}	
		else if(m==8)
		{
			s=31+28+31+30+31+30+31+d;
			printf("%d",s);
		}
		else if(m==9)
		{
			s=31+28+31+30+31+30+31+31+d;
			printf("%d",s);
		}
		else if(m==10)
		{
			s=31+28+31+30+31+30+31+31+30+d;
			printf("%d",s);
		}
		else if(m==11)
		{
			s=31+28+31+30+31+30+31+31+30+31+d;
			printf("%d",s);
		}
		else if(m==12)
		{
			s=31+28+31+30+31+30+31+31+30+31+30+d;
			printf("%d",s);
		}
	}
}