#include<stdio.h>
int main()
{
	int d,m,y;
	scanf("%d",&m);
	scanf("%d",&d);
	scanf("%d",&y);
	int a[]={31,28,31,30,31,30,31,31,30,31,30,31};
	int sum=0;
	if((y%4==0)||(y%100==0&&y%4==0))
	{
		a[1]=29;
	}
	int i=0;
	while(i<m-1)
	{
		sum=sum+a[i];
		i++;
	}
	sum=sum+d;
	printf("%d",sum);
}