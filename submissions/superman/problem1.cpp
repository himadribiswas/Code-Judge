#include<stdio.h>
#include<math.h>
main()
{
	int n,r,l,i=0,s=0,c=0,f=0,sum=0;
	scanf("%d",&n);
	s=n;
	while(n!=0)
	{
		n=n/10;
		c++;
	}
	n=s;
//	sum=n;
	while(sum!=s)
	{
		r=r%10;
		n=n/10;
		sum=r*pow(10,(c-1))+n;
		for(i=2;i<sum/2;i++)
		{
			if(sum%i==0)
			{
				f=1;
				break;
			}
			
		}
		if(f=1)
		{
			break;
		}
		n=sum;
	}
	if(f==1)
	{
		printf("NOT A CIRCULAR PRIME");
	}
	else
	{
		printf("CIRCULAR PRIME");
	}
}