#include <stdio.h>
 
int main ()
{
    static int array[10][10];
    int i, j, m, n, a = 0, sum = 0;
 
    
    scanf("%d", &m);
    n=m;
    if(m>2&&m<10)
    {
	
    
    
        
        for (i = 0; i < m; ++i)
        {
            for (j = 0; j < n; ++j)
            {
                scanf("%d", &array[i][j]);
            }
        }
        
        
        for (i = 0; i < m; ++i)
        {
            sum = sum + array[i][i];
            a = a + array[i][m - i - 1];
        }
        if(sum>a)
        printf("%d", sum);
        else
        printf("%d", a);
}
else
printf("SIZE OUT OF RANGE");
return 0;
    
}
