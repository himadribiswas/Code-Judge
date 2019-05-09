#include <stdio.h>
#include <math.h>
main()
{
	int c, m,n,i, sum =0,s=0,asum=0,d=0,j;
	scanf("%d %d", &m, &n);
	if (m<n)
	{
		for (i=m; i<=n; i++)
		{
			int  num = i;
			while (num>0)
			{
				d = num%10;
				 sum = sum +d;
				 num = num/10;
		    }
		    if (sum ==1)
		    s=1;
		    else if ((sum>1)&&(sum<10))
		    {
		    	s=0;
		    	
			}
			else
			{
				while( sum >0)
				{
					d = sum %10;
					asum = asum+d;
					sum = sum /10;
					
				}
				if (asum ==1)
		    s=1;
		    else if ((asum>1)&&(asum<10))
		    {
		    	s=0;
		    	
			}
		    }
		    
			if (s==1)
			{
				int b = 0;
				for(j=2; j< i/2; j++)
				{
					if (i%j==0)
					b++;
					
				}
				
            if (b!=0)
			 printf("%d",i);
			 } 
			 
		}
	}
}