#include<stdio.h>
main()
{
	int a[10][10],m,suml=0,sumr=0,f=0,i,j;
	scanf("%d",&m);
	if(m<2 || m>10)
	{
		printf("SIZE OUT OF RANGE");
		f=1;
	}
	if(f==0){
	
	for(i=0;i<m;i++)
	{
		for(j=0;j<m;j++)
		{
			scanf("%d",&a[i][j]);
		}
	}
	for(i=0;i<m;i++)
	{
		for(j=0;j<m;j++)
		{
			if(i==j)
			{
				suml=suml+a[i][j];
			}
		}
	}
	for(i=0;i<m;i++)
	{
		for(j=0;j<m;j++)
		{
		
			if((i+j)==m-1)
			{
			
				sumr=sumr+a[i][j];
		}
		}
	}
	if(sumr>suml)
	{
		printf("%d",sumr);
	}
	else
	printf("%d",suml);
	
}}