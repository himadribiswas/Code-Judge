import java.io.*;
import java.util.*;
class problem3
{public static void main(String args[])
    {Scanner sc=new Scanner(System.in);
    //    System.out.println("    ");
        int t=sc.nextInt();
   
        if((t>2)&&(t<10))
        {int m[][]=new int[t][t];
            for(int i=0;i<t;i++)
            {for(int j=0;j<t;j++)
                {m[i][j]=sc.nextInt();
                }
        }
        int s1=0;
        for(int i=0;i<t;i++)
            {for(int j=0;j<t;j++)
                {if(i==j)
                    s1=s1+m[i][j];
                }
                
            }
            
            int s2=0;
            for(int i=0;i<t;i++)
            {for(int j=0;j<t;j++)
                {if((i+j)==(t-1))
                    s2=s2+m[i][j];
                }}
                
                if(s2>=s1)
                {System.out.println(s2);
                }
                else
                {System.out.println(s1);
                }
            }
            else
            {System.out.println("SIZE OUT OF RANGE");
            }
        }
    }
        
