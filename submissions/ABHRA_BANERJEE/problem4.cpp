#include<stdio.h>
int isCompositeMagic(int n)
{
	int i,c,sum=0;
	for(i=2;i<=n/2;i++)
	{
		if(n%i==0)
		c=c+1;
	}
	while(n>9)
	{
		while(n>0)
		{
			sum=sum+(n%10);
			n=n/10;
		}
		n=sum;
	}
	if(n==1&&c>0)
	return 1;
	else
	return 0;
}
main()
{
	int m,n,i;
	do
	{
		scanf("%d",&m);
		scanf("%d",&n);
		if(m<0||n<0||m>=n)
		printf("INVALID INPUT");
	}
	while(m<0||n<0||m>=n);
	for(i=m;i<=n;i++)
	{
		if(isCompositeMagic(i)==1)
		printf("%d ",i);
	}
}
