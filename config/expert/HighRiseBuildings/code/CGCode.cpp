#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        int can_see_from_north;
        cin >> can_see_from_north; cin.ignore();
    }
    for (int i = 0; i < n; i++) {
        int can_see_from_west;
        cin >> can_see_from_west; cin.ignore();
    }
    for (int i = 0; i < n; i++) {
        int can_see_from_east;
        cin >> can_see_from_east; cin.ignore();
    }
    for (int i = 0; i < n; i++) {
        int can_see_from_south;
        cin >> can_see_from_south; cin.ignore();
    }
    for (int i = 0; i < n; i++) {
        for (int j = 0; j < n; j++) {
            int cell;
            cin >> cell; cin.ignore();
        }
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;


}