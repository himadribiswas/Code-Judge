#include <stdio.h>
#include <math.h>
main()
{
	int A[100][100];
	int m,i,j,sum= 0,dum=0;
	scanf("%d",&m);
	if ((m>2)&&(m<10))
	{
		for (i=0;i<m;i++)
		{
			for (j=0;j<m;j++)
			{
				scanf("%d", &A[i][j]);
			}
		}
	for (i=0;i<m;i++)
		{
			for (j=0;j<m;j++)
			{
				if (i==j)
				sum = sum+A[i][j];
			}
		}
	int k = 0, l=(m-1);
	while (k<m)
	{
		dum = dum + A[k][l];
		k++;
		l--;
	}
		if(sum>=dum)
	       printf("%d", sum);
	    else 
         printf("%d", dum);
	
	}
	else
	printf("SIZE OUT OF RANGE");
}
