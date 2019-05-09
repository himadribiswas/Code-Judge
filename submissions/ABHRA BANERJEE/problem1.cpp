#include<stdio.h>
int factorial(int n)
{
	if((n==0)||(n==1))
	return 1;
	else
	return (n*factorial(n-1));
}
main()
{
	int n,n2,d,sum=0;
	scanf("%d",&n);
	n2=n;
	while(n>0)
	{
		d=n%10;
		sum=sum+factorial(d);
		n=n/10;
	}
	if(sum==n2)
	printf("Yes");
	else
	printf("No");
}
