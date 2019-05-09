#include <stdio.h>
#include <math.h>
main()
{
	int a[12],dd,yy,mm,sum =0,i;
	scanf("%d %d %d", &mm, &dd, &yy);
	if (yy%4==0)
	{
		a[1]= 31;a[2]=29;a[3]=31;a[4]=30;a[5]=31; a[6]=30; a[7]=31;a[8]=31; a[9]=30; a[10]=31; a[11]=30; a[12]=31;
	}
	else 
	{
	
	a[1]=31;a[2]=28;a[3]=31;a[4]=30;a[5]=31; a[6]=30; a[7]=31;a[8]=31; a[9]=30; a[10]=31; a[11]=30; a[12]=31;
}
	for (i =1 ; i<(mm); i++ )
	{
		sum = sum +a[i];
	}
	sum = sum+dd;
	printf("%d",sum);
}