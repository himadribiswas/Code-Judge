#include <stdio.h>
#include <math.h>
main()
{
	int n,i,d,ctr=0,j=0,k=0,e=0,f=0,s;
	scanf("%d",&n);
	int num = n;
	while (n>0)
    {
    	d = n%10;
    	n = n/10;
    	ctr++;
	}
	while (ctr>0)
	{
		num = k;
		d= k%10;
		j = j*10+d;
		num = num/10;
		k = j*pow(10,(ctr-1))+num;
		int s =0;
		for (i = 2; i <(k/2); i++)
		{
		
			if (k%i==0)
			s++;
		}
		if( s == 0)
		f=1;
		else if(s!=0) 
		{
		e=1;
		}
		ctr--;
		
	}
	if ((e==0)&&(f==1))
	printf("CIRCULAR PRIME");
	else
	printf("NOT A CIRCULAR PRIME");	
}