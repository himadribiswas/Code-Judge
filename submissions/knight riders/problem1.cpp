#include<stdio.h>

main()

{
	int num,i,k=0,sum=1,r,n;

	scanf("%d",&n);
	n=num;
	while(num>0)
	{
	r=num%10;
	sum=1;
	for(i=r;i>=1;i--);
     {
		 	sum=sum*i;
	}
num=num/10;
k=k+sum;

}
if (n==k)
	printf("Yes");	
else
	printf ("No");


}