#include<stdio.h>
int prime(int);
int magic(int);
int main()
{
	int x,y,a,b,i,j;
	scanf("%d%d",&x,&y);
	if(x>y)
	{
		printf("Invalid Input");
	}
	else
	{
	for(i=x;i<=y;i++)
	{
		a=prime(i);
		b=magic(i);
		//printf("%d\n",i);
		if(a==0&&b==1)
		{
			printf("%d ",i);
		}
		else
		continue;
	}
	}
	return 0;
	
}
int magic(int n)
{
	if(n==1)
	{
		return 1;
	}
	else if(n/10==0)
	{
		return 0;
	}
	else
	{
		int a,size,i;
		i=n;
		a=0;
		size=0;
		while(i!=0)
		{
			i=i/10;
			size++;
		}
	//	printf("%d\n",size);
		for(i=0;i<size;i++)
		{
			a=a+n%10;
			n=n/10;
		}
	//	printf("%d",a);
		magic(a);
	}
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