#include<stdio.h>
int fact(int n)
{
	int p=1,i=1;
	for(i=1;i<=n;i++)
	p*=i;
	return p;
}
int main()
{
	int n;

	scanf("%d",&n);
	int m=n,d=1,f=1,s=0;
	while(n>0)
	{
		d=n%10;
		f=fact(d);
		s+=f;
		n/=10;
			
	}
	if(m==s)
	printf("yes");
	else
	printf("no");
	return 1;
}