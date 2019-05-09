#include<stdio.h>
#include<math.h>
int prime(int);
int main()
{
	int x,y,i,j,size;
	scanf("%d",&x);
	i=x;
	size=0;	
	while(i!=0)
	{
		i=i/10;
		size++;
	}
	for(y=0;y<(size-1);y++)
	{
		x=(pow(10,(size-1))*(x%10))+(x/10);
		j=prime(x);
	}
	if(j==1)
	{
		printf("CIRCULAR PRIME");
	}
	else if(j==0)
	{
		printf("NOT A CIRCULAR PRIME");
	}
	return 0;
}
int prime(int n)
{
	int i,x;
	for(i=2;i<=n-1;i++)
	{
		if(n%i==0)
		{
			x=0;
			break;
		}
		else
		{
			x=1;
		}
	}
	return x;
}