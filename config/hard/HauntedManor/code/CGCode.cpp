#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int vampire_count;
    int zombie_count;
    int ghost_count;
    cin >> vampire_count >> zombie_count >> ghost_count; cin.ignore();
    int size;
    cin >> size; cin.ignore();
    for (int i = 0; i < size; i++) {
        int can_see_from_top;
        cin >> can_see_from_top; cin.ignore();
    }
    for (int i = 0; i < size; i++) {
        int can_see_from_bottom;
        cin >> can_see_from_bottom; cin.ignore();
    }
    for (int i = 0; i < size; i++) {
        int can_see_from_left;
        cin >> can_see_from_left; cin.ignore();
    }
    for (int i = 0; i < size; i++) {
        int can_see_from_right;
        cin >> can_see_from_right; cin.ignore();
    }
    for (int i = 0; i < size; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}