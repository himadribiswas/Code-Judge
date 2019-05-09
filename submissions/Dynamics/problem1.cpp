#include<stdio.h>
int main()
{
	int d,n=0,i,s=0,m=0,fact=1;
	scanf("%d",&n);
	m=n;
	while(n!=0)
	{
		d=n%10;
		
		for(i=1;i<=d;i++)
		{
			fact=fact*i;
		}
		s=s+fact;
		n=n/10;
	}
	if(m==s)
	{
		printf("Yes");
	}
	else
	{
	printf("No");
	}
	return 0;
}
