#include <stdio.h>
#include <math.h>
#define TRUE 1
 
int main()
{
  long m, n, t, r = 0, c, d;
 
  
  scanf("%ld", &n);
  m=n;
  while (TRUE)
  {
    m++;
    t = m;
 
    
 
    while(t)
    {
      r *= 10;  
      r += t%10;
      t /= 10;
    }
 
    
 
    if (r == m)
    {
      d = (int)sqrt(m);
 
      
 
      for (c = 2; c <= d; c++)
      {
        if (m%c == 0)
          break;
      }
      if (c == d+1)
        break;
    }
    r = 0;
  }
 
  if(m!=n)
  printf("Palprime");
  else
  printf("Not Palprime");
 
  return 0;
}
