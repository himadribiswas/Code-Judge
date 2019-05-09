#include<stdio.h>
int fact(int x)
{
	int y,i;
	y=1;
	for(i=1;i<=x;i++)
	{
		y=y*i;
	}
	return y;
}
int main()
{
	int a,b,c;
	b=0;
	scanf("%d",&a);
	c=a;
	while(a!=0)
	{
		b=b+fact(a%10);
		a=a/10;
	}
	if(b==c)
	{
		printf("Yes");
	}
	else
		printf("No");
	return 0;
}