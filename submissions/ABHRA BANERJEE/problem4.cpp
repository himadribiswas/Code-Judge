#include<stdio.h>
int isCompositeMagic(int n)
{
	int i,c,n2,sum=0,d;
	n2=n;
	for(i=1;i<=n;i++)
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
	if(sum==1&&c>2)
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
		printf("\nINVALID INPUT\n");
	}
	while(m<0||n<0||m>=n);
	for(i=m;i<=n;i++)
	{
		if(isCompositeMagic(i)==1)
		printf("%d ",i);
	}
}
