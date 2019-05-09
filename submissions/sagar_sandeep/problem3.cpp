#include<stdio.h>
int prime(int n)
{
	int i,c=0;
	for(i=2;i<n;i++)
	{
		if(n%i==0)
		c++;
	
	}
	if(c==0)
	return 1;
	else
	return 0;
}
int pal(int n)
{
	int m=n,d=0,r=0;
	while(m>0)
	{
		d=n%10;
		r=r*10+d;
		n/=10;
	}
	if(r==m)
	return 1;
	else
	return 0;
}
int main()
{
	int n;
    int m=n;
	scanf("%d",&n);
	if((pal(n)==1)&&(prime(m)==1))
	printf("Palprime");
	else
	printf("Not Palprime");
	return 1;
}
	
