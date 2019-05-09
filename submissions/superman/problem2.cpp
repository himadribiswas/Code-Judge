#include<stdio.h>
main()
{
	int d,m,y,f=0,sum=0,i;
	int a[]={31,28,31,30,31,30,31,31,30,31,30,31};
	int b[]={31,29,31,30,31,30,31,31,30,31,30,31};
	
	scanf("%d",&m);
		
	scanf("%d",&d);
		
	scanf("%d",&y);
	if(y%4==0 ||y%400==0)
	{
		f=1;
	}
	if(f==1)
	{
		for(i=0;i<m-1;i++)
		{
			sum=sum+b[i];
		}
	sum=sum+d;
	printf("%d",sum);
	}
	
	else
	{
		for(i=0;i<m-1;i++)
		{
			sum=sum+a[i];
		}
	sum=sum+d;
	printf("%d",sum);
	}
}