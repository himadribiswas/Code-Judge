#include<stdio.h>
#include<conio.h>
int main()
{
	int i,j,sum1=0,M,sum2=0;
	int a[10][10];
	scanf("%d",&M);
	
	
		
	if( (M>2)&&(M<10) )
	{
	
	
	for(i=0;i<M;i++)
	{
	
	for(j=0;j<M;j++)
	{
		scanf("%d",&a[i][j]);
	}

}



for(i=0;i<M;i++)
	{
	
	
	for(j=0;j<M;j++)
	{
		if(i==j)
		sum1=sum1 +a[i][j];
	else if(i+j==M-1)
	sum2=sum2 + a[i][j];
	}
}
if(sum1>sum2)

printf("%d",sum1);

else
printf("%d",sum2);
}

else
printf("SIZE OUT OF RANGE");


return 0;
}