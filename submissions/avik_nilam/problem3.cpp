#include<stdio.h>
int main()
{
	int x,y,a[10][10],b,c,i,j;
	scanf("%d",&x);
	if(x<=2||x>=10)
	{
		printf("SIZE OUT OF RANGE");
	}
else
{
	for(i=0;i<x;i++)
	{
		for(j=0;j<x;j++)
		{
			scanf("%d",&a[i][j]);
		}
	}
	b=0;
	for(i=0,j=0;i<x,j<x;i++,j++)
	{
		b=b+a[i][j];
	}
	c=0;
	for(i=0,j=x-1;i<x,j>=0;i++,j--)
	{
		c=c+a[i][j];
	}
	if(b>=c)
	{
		printf("%d",b);
	}
	else
	{
		printf("%d",c);
	}
	return 0;
}
}