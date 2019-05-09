#include<stdio.h>
#include<math.h>
int main()
{
	int m,d,year,i,sum=0,sum1=0,sum2=0,sum3=0;
	scanf("%d",&m);
	scanf("%d",&d);
	scanf("%d",&year);
	int a[]={31,29,31,30,31,30,31,31,30,31,30,31};
	int b[]={31,28,31,30,31,30,31,31,30,31,30,31};
    if(year%4==0 || year%400==0)
	{
	for(i=0;i<(m-1);i++)
    {
    	sum=sum+a[i];
    	}
		sum1=sum+d;
		printf("%d",sum1);
}
else
{
for(i=0;i<(m-1);i++)
    {
    	sum2=sum2+b[i];
	}
	sum3=sum2+d;
	printf("%d",sum3);
}
}

	