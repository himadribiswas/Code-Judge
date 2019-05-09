#include<stdio.h>
main()
{
	int m,n,i=0,j,f=0,c,a[500],z=0,k=0,p;
	scanf("%d%d",&m,&n);	
	c=n;
	for(i=m;i<=n;i++)
	{
		for(j=2;j<=i/2;j++)
		{
			if(i%j==0)
			{
				a[k]=i;
				k++;
				break;	
			}
		}
	}
	
	for(i=0;i<k;i++)
	{
		z=a[i];
		p=magic(z);
		if(p==1)
		{
			printf("%d",a[i]);
		}
	}
}

int magic(int k)
{
	int sum=k,sum1,r;
	while(sum>=9)
	{
		//k=sum;
		//sum=sum1;		
		while(k!=0){	
		r=k%10;
		sum1=sum1+r;
		k=k/10;
	}
	k=sum1;
	sum=sum1;
	}
	if(sum==1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}