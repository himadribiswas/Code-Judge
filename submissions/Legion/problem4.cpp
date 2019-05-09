#include<stdio.h>
#include<math.h>
int prime(int n);
int magic(int n);
int main()
{
	int x,y,m,n,i;
	scanf("%d",&m);
	scanf("%d",&n);
	for(i=m;i<=n;i++)
	{
	x=prime(i);
	y=magic(i);
	if(x>2 && y==1)
    {
	printf("%d",i);
}
}
}
int prime(int n)
{
	int i,a=0;
	for(i=1;i<=n;i++)
	{
		if(n%i==0)
		{
			a++;
		}
	}
	return a;
}
int magic(int n)
{
	int b,sum=0;
	while(n!=0)
	{
		b=n%10;
		n=n/10;
		sum=b+n;
		n=sum;
	}
	return sum;
}
