#include<stdio.h>
int main()
{
	int n,m,s=0,d,i,f=0;
	scanf("%d",&n);
	m=n;
	while(n>1)
	{
		d=n%10;
		s=10*d+s;
		n=n/10;
	}
	for(i=2;i<=n/2;i++)
	{
		if(n%i==0);
		f=1;
	}
	if(m==s && f==0)
	printf("Palprime");
	else
	printf("Not Palprime");
	return 0;
}