#include<stdio.h>
#include<math.h>
int main()
{
	int m,i,j,sum=0,sum1=0;
	int a[10][10];
	scanf("%d",&m);
	if(m<2 || m>10)
	{
	printf("SIZE OUT OF RANGE");
	//exit(0);
     }
else
{
	for(i=1;i<=m;i++)
	{
	for(j=1;j<=m;j++)
		{
			scanf("%d",&a[i][j]);
		}
	}
		for(i=1;i<=m;i++)
	{
		for(j=1;j<=m;j++)
		{
			if(i==j)
			sum=sum+a[i][j];
		}
	}
			for(i=1;i<=m;i++)
	{
		for(j=m;j>=1;j--)
		{
			if ((i+j)==(m+1))
			sum1=sum1+ a[i][j];
		}
}
if(sum>sum1)
printf("%d",sum);
else{
	printf("%d",sum1);
}
}
}
